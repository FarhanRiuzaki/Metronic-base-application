<?php

namespace App\Http\Controllers;

use App\Classes\Theme\Metronic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User as ModelsUser;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Yajra\DataTables\Facades\DataTables as FacadesDataTables;

class UserController extends Controller
{
    private $page_title         = "Users";
    private $page_description   = "Management User";

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:user.index|user.create|user.edit|user.delete', ['only' => ['index','store']]);
        $this->middleware('permission:user.create', ['only' => ['create','store']]);
        $this->middleware('permission:user.edit',   ['only' => ['edit','update']]);
        $this->middleware('permission:user.delete', ['only' => ['destroy']]);

    }
    //
    public function index(Request $request)
    {
        if($request->ajax()){
            $model = ModelsUser::query();

            return FacadesDataTables::of($model)
            ->addIndexColumn()
            ->addColumn('roles', function($data){
                $label = '';
                if(!empty($data->getRoleNames())){
                    foreach($data->getRoleNames() as $v){
                        $label .=  " <label class='badge badge-success'> ". $v ." </label> ";
                    }
                }
                return $label;
            })
            ->addColumn('status', function($data){
                if($data->status == 1){
                    $label =  " <label class='badge badge-success'> Active </label> ";
                }else{
                    $label =  " <label class='badge badge-warning'> Non-Active </label> ";
                }

                return $label;
            })
            ->addColumn('action', function($data){
                $button = ButtonSED($data, 'users', 'user');
                if ($data->status == 0) {
                    $button .= ' <button class="btn btn-icon btn-light btn-sm btn-activated btn-hover-success" data-remote="'. route('users.updateStatus', Crypt::encrypt($data->id)) .'" data-toggle="tooltip"  data-theme="dark" title="Activate User">
                        '. Metronic::getSVGController("media/svg/icons/Navigation/Double-check.svg", "svg-icon-md svg-icon-success") .'
                    </button>';
                }
                // dd($button);
                return $button;
            })
            ->rawColumns(['roles','action','status'])
            ->make(true);
        }
        $page_title         = $this->page_title;
        $page_description   = $this->page_description;
        $page_breadcrumbs   = [['page'  => 'users','title' =>  'Users']];
        $page_buttons       = [['route'=> 'users.create','can' => 'user.create', 'title' => 'New Record', 'class' => 'btn-primary', 'svg'=> 'Design/Flatten.svg']];

        return view('master.users.index',compact('page_title', 'page_description','page_breadcrumbs','page_buttons'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $roles = Role::pluck('name','name')->all();

        $page_title         = $this->page_title;
        $page_description   = $this->page_description;
        $page_breadcrumbs   = [['page'  => 'users','title' =>  'Users'],['page'  => 'users/create','title' =>  'Create User']];
        $page_buttons       = [
            ['route'=> 'users.index', 'title' => 'Back','svg' => 'Navigation/Angle-double-left.svg', 'class' => 'btn-info'],
            ['route'=> 'form',  'id-form' => 'MyForm', 'title' => 'Submit','svg' => 'Communication/Sending.svg', 'class' => 'btn-primary']
        ];

        return view('master.users.create',compact('page_title', 'page_description', 'page_breadcrumbs', 'page_buttons','roles'));
    }

    public function store(UserRequest $request)
    {
        $input              = $request->validated();
        $username           = Str::slug($input['name'], '');
        $input['password']  = FacadesHash::make($input['password']);
        $input['username']  = $username;
        $user               = ModelsUser::create($input);

        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
        ->with(toaster('User created successfully', 'success', 'Success'));
    }

    public function show($id)
    {
        $id     = Crypt::decrypt($id);
        $user   = ModelsUser::find($id);

        $page_title         = $this->page_title;
        $page_description   = $this->page_description;
        $page_breadcrumbs   = [['page'  => 'users','title' =>  'Users'],['page'  => 'users/show','title' =>  'Show User']];
        $page_buttons       = [
            ['route'=> 'users.index', 'title' => 'Back','svg' => 'Navigation/Angle-double-left.svg', 'class' => 'btn-info'],
        ];

        return view('master.users.show',compact('page_title', 'page_description', 'page_breadcrumbs', 'page_buttons','user'));
    }

    public function edit($id)
    {
        $id         = Crypt::decrypt($id);
        $user       = ModelsUser::find($id);
        $roles      = Role::pluck('name','name')->all();
        $userRole   = $user->roles->pluck('name','name')->all();

        $page_title         = $this->page_title;
        $page_description   = $this->page_description;
        $page_breadcrumbs   = [['page'  => 'users','title' =>  'Users'],['page'  => 'users/edit','title' =>  'Edit User']];
        $page_buttons       = [
            ['route'=> 'users.index', 'title' => 'Back','svg' => 'Navigation/Angle-double-left.svg', 'class' => 'btn-info'],
            ['route'=> 'form','id-form' => 'MyForm',  'title' => 'Submit','svg' => 'Communication/Sending.svg', 'class' => 'btn-primary']
        ];

        return view('master.users.edit',compact('page_title', 'page_description', 'page_breadcrumbs', 'page_buttons','user','roles','userRole'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'      => 'required',
            'email'     => 'required|email|unique:users,email,'.$id,
            'password'  => 'same:confirm-password',
            'roles'     => 'required'
        ]);

        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = FacadesHash::make($input['password']);
        }else{
            unset($input['password']);
        }

        $user = ModelsUser::find($id);
        $user->update($input);
        FacadesDB::table('model_has_roles')->where('model_id',$id)->delete();
        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
        ->with(toaster('User updated successfully', 'success', 'Success'));
    }

    public function destroy($id)
    {
        $id     = Crypt::decrypt($id);
        $delete = ModelsUser::findOrFail($id);
        $delete->delete() == true
            ? $return = ['code' => 'success', 'msg' => 'data deleted successfully']
            : $return = ['code' => 'error', 'msg' => 'something went wrong!'];

        return response()->json($return);
    }

    public function updateStatus($id)
    {
        $id     = Crypt::decrypt($id);
        $user   = ModelsUser::find($id);
        $user->update(['status' => 1 ]) == true
        ? $return = ['code' => 'success', 'msg' => 'User updated successfully']
        : $return = ['code' => 'error', 'msg' => 'something went wrong!'];

        return response()->json($return);
    }
}
