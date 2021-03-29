<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Classes\Theme\Metronic;
use Illuminate\Support\Facades\Crypt;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class PermissionController extends Controller
{

    private $page_title         = "Permissions";
    private $page_description   = "Permission Management";

    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:permission.index|permission.create|permission.edit|permission.delete', ['only' => ['index','store']]);
        $this->middleware('permission:permission.create',   ['only' => ['create','store']]);
        $this->middleware('permission:permission.edit',     ['only' => ['edit','update']]);
        $this->middleware('permission:permission.delete',   ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $permission     = DB::table('permissions')->orderBy('name', 'DESC')->get();
        // Format bentuk data untuk autocomplete.
        $output = [];
        foreach($permission as $data) {
            $output[] = [
                'value'     => $data->name,
                'data'      => $data->name
            ];
        }
        $autocomplete       = json_encode($output);

        $page_title         = $this->page_title;
        $page_description   = $this->page_description;
        $page_breadcrumbs   = [['page'  => 'permissions','title' =>  'Permissions']];
        $page_buttons       = '';

        return view('master.permission.index', compact('page_title', 'page_description', 'page_breadcrumbs', 'output', 'page_buttons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData    = $request->all();
        Permission::findOrCreate($requestData['permission']);

        return redirect()->route('permissions.index')
        ->with(toaster('Permissions created successfully', 'success', 'Success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        # code...
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $req)
    {
        $id                 = Crypt::decrypt($id);
        $permission_edit    = Permission::findById($id);

        $permission         = DB::table('permissions')->orderBy('name', 'DESC')->get();
        // Format bentuk data untuk autocomplete.
        $output = [];
        foreach($permission as $data) {
            $output[] = [
                'value'     => $data->name,
                'data'      => $data->name
            ];
        }
        $autocomplete       = json_encode($output);

        $page_title         = $this->page_title;
        $page_description   = $this->page_description;
        $page_breadcrumbs   = [['page'  => 'permissions','title' =>  'Permissions']];
        $page_buttons       = [
            ['route'=> 'permissions.index', 'title' => 'Reset','svg' => 'Navigation/Angle-double-left.svg', 'class' => 'btn-info'],
        ];

        return view('master.permission.index', compact('page_title', 'page_description', 'page_breadcrumbs', 'output', 'page_buttons', 'permission_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id     = Crypt::decrypt($id);
        $input  = $request->all();

        $Permission   = Permission::findOrFail($id);
        $Permission->update($input);

        return redirect()->route('permissions.index')
        ->with(toaster('User updated successfully', 'success', 'Success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id     = Crypt::decrypt($id);
        $delete = Permission::findOrFail($id);
        $delete->delete() == true
            ? $return = ['code' => 'success', 'msg' => 'data deleted successfully']
            : $return = ['code' => 'error', 'msg' => 'something went wrong!'];

        return response()->json($return);
    }

    public function datatable(Request $req)
    {
        if($req->ajax()){
            $this->type = $req['type'];
            $model      = DB::table('permissions')->orderBy('name', 'DESC');

            return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('group', function($data){
                $render = $data->name;
                $render = explode('.', $render);
                return $render[0];
            })
            ->addColumn('action', function($data){
                $button = '';
                if(auth()->user()->can('permission.edit')){
                    $button .= ' <a class="btn btn-icon btn-light btn-sm btn-hover-primary" href="'.  route('permissions.edit',Crypt::encrypt($data->id)) .'" data-toggle="tooltip"  data-theme="dark" title="Edit">
                            '. Metronic::getSVGController("media/svg/icons/Communication/Write.svg", "svg-icon-md svg-icon-primary") .'
                    </a>';
                }
                if($this->type == 'create'){
                    if(auth()->user()->can('permission.delete')){
                        $button .= ' <button class="btn btn-icon btn-light btn-sm btn-delete btn-hover-danger" data-remote="'. route('permissions.destroy', Crypt::encrypt($data->id)) .'" data-toggle="tooltip"  data-theme="dark" title="Delete">
                            '. Metronic::getSVGController("media/svg/icons/General/Trash.svg", "svg-icon-md svg-icon-danger") .'
                        </button>';
                    }
                }
                return $button;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
    }
}
