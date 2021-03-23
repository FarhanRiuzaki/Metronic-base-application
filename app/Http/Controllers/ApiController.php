<?php

namespace App\Http\Controllers;

use App\Classes\Theme\Metronic;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Yajra\DataTables\DataTables;

class ApiController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:api.uploadMedia', ['only' => ['uploadMedia']]);
    }

    public function uploadMedia(Request $request)
    {
        $path = storage_path('tmp/uploads');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('file');
        $name = uniqid() . '_' . trim($file->getClientOriginalName());
        $file->move($path, $name);

        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }

    public function DTUser(Request $request)
    {
        if($request->ajax()){
            $model = User::query()->where('status', 0);

            return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('avatar', function($data)
            {
                $avatar = '<span class="symbol symbol-35 symbol-light-success">
                            <span class="symbol-label font-size-h5 font-weight-bold">'.strtoupper(get_avatar($data->name)).'</span>
                        </span>';
                return $avatar;
            })
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
            ->addColumn('created_at', function($data){
                return date('d F Y', strtotime($data->created_at));
            })
            ->addColumn('action', function($data){
                    $button = ' <button class="btn btn-icon btn-light btn-sm btn-activated btn-hover-success" data-remote="'. route('users.updateStatus', Crypt::encrypt($data->id)) .'" data-toggle="tooltip"  data-theme="dark" title="Activate User">
                        '. Metronic::getSVGController("media/svg/icons/Navigation/Double-check.svg", "svg-icon-md svg-icon-success") .'
                    </button>';
                // dd($button);
                return $button;
            })
            ->rawColumns(['roles','action','status', 'avatar'])
            ->make(true);
        }
    }
}
