<?php

namespace App\Http\Controllers;

use App\Classes\Theme\Metronic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB as FacadesDB;
use Yajra\DataTables\DataTables;

class RoleController extends Controller
{
    private $page_title         = "Roles";
    private $page_description   = "Role Management";

    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:role.index|role.create|role.edit|role.delete', ['only' => ['index','store']]);
        $this->middleware('permission:role.create', ['only' => ['create','store']]);
        $this->middleware('permission:role.edit', ['only' => ['edit','update']]);
        $this->middleware('permission:role.delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        if($request->ajax()){
            $model = Role::query();

            return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('action', function($data){
                $button = ' <a class="btn btn-icon btn-light btn-sm btn-hover-warning" href="'.  route('roles.show',Crypt::encrypt($data->id)) .'" data-toggle="tooltip"  data-theme="dark" title="Show">
                '. Metronic::getSVGController("media/svg/icons/General/Settings-1.svg", "svg-icon-md svg-icon-warning") .'
                </a>';
                if(auth()->user()->can('role.edit')){
                    $button .= ' <a class="btn btn-icon btn-light btn-sm btn-hover-primary" href="'.  route('roles.edit',Crypt::encrypt($data->id)) .'" data-toggle="tooltip"  data-theme="dark" title="Edit & Permission">
                            '. Metronic::getSVGController("media/svg/icons/Code/Git4.svg", "svg-icon-md svg-icon-primary") .'
                    </a>';
                }
                if($data->id != 2){
                    if(auth()->user()->can('role.delete')){
                        $button .= ' <button class="btn btn-icon btn-light btn-sm btn-delete btn-hover-danger" data-remote="'. route('roles.destroy', Crypt::encrypt($data->id)) .'" data-toggle="tooltip"  data-theme="dark" title="Delete">
                            '. Metronic::getSVGController("media/svg/icons/General/Trash.svg", "svg-icon-md svg-icon-danger") .'
                        </button>';
                    }
                }
                return $button;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        $page_title         = $this->page_title;
        $page_description   = $this->page_description;
        $page_breadcrumbs   = [['page'  => 'roles','title' =>  'Roles']];
        $page_buttons       = [['route'=> 'roles.create', 'can' => 'role.create', 'title' => 'New Record', 'class' => 'btn-primary', 'svg'=> 'Design/Flatten.svg']];

        return view('master.roles.index',compact('page_title', 'page_description','page_breadcrumbs','page_buttons','page_buttons'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $permission = Permission::orderBy('name', 'DESC')->get();

        $page_title         = $this->page_title;
        $page_description   = $this->page_description;
        $page_breadcrumbs   = [['page'  => 'roles','title' =>  'Roles'], ['page'  => 'roles/crate','title' =>  'Create Roles']];
        $page_buttons       = [
            ['route'=> 'roles.index', 'title' => 'Back','svg' => 'Navigation/Angle-double-left.svg', 'class' => 'btn-info'],
            ['route'=> 'form', 'id-form' => 'MyForm', 'title' => 'Submit','svg' => 'Communication/Sending.svg', 'class' => 'btn-primary']
        ];

        return view('master.roles.create',compact('page_title', 'page_description','page_breadcrumbs','page_buttons','permission'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required|unique:roles,name',
            'permission'    => 'required',
        ]);

        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));

        return redirect()->route('roles.index')
        ->with(toaster('Role created successfully', 'success', 'Success'));
    }

    public function show($id)
    {
        $id     = Crypt::decrypt($id);
        $role   = Role::find($id);

        $rolePermissions    = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
        ->where("role_has_permissions.role_id",$id)
        ->get();

        $page_title         = $this->page_title;
        $page_description   = $this->page_description;
        $page_breadcrumbs   = [['page'  => 'roles','title' =>  'Roles'], ['page'  => 'roles/show','title' =>  'Show Roles']];
        $page_buttons       = [
            ['route'=> 'roles.index', 'title' => 'Back','svg' => 'Navigation/Angle-double-left.svg', 'class' => 'btn-info']
        ];

        return view('master.roles.show',compact('page_title', 'page_description','page_breadcrumbs','page_buttons','role','rolePermissions'));
    }

    public function edit($id)
    {
        $id                 = Crypt::decrypt($id);
        $role               = Role::find($id);
        $permission         = Permission::orderBy('name', 'DESC')->get();
        $rolePermissions    = FacadesDB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
        ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
        ->all();

        $page_title         = $this->page_title;
        $page_description   = $this->page_description;
        $page_breadcrumbs   = [['page'  => 'roles','title' =>  'Roles'], ['page'  => 'roles/edit','title' =>  'Edit Roles']];
        $page_buttons       = [
            ['route'=> 'roles.index', 'id-form' => 'MyForm', 'title' => 'Back','svg' => 'Navigation/Angle-double-left.svg', 'class' => 'btn-info'],
            ['route'=> 'form', 'id-form' => 'MyForm', 'title' => 'Submit','svg' => 'Communication/Sending.svg', 'class' => 'btn-primary']
        ];

        return view('master.roles.edit',compact('page_title', 'page_description','page_breadcrumbs','page_buttons','role','permission','rolePermissions'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'          => 'required',
            'permission'    => 'required',
        ]);

        $role       = Role::find($id);
        $role->name = $request->input('name');
        $role->save();
        $role->syncPermissions($request->input('permission'));

        return redirect()->route('roles.index')
        ->with(toaster('Role updated successfully', 'success', 'Success'));
    }

    public function destroy($id)
    {
        $id     = Crypt::decrypt($id);
        $delete = Role::findOrFail($id);
        $delete->delete() == true
            ? $return = ['code' => 'success', 'msg' => 'data deleted successfully']
            : $return = ['code' => 'error', 'msg' => 'something went wrong!'];

        return response()->json($return);
    }
}
