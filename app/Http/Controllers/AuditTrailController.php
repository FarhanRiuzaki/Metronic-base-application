<?php

namespace App\Http\Controllers;

use App\Classes\Theme\Metronic;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use OwenIt\Auditing\Models\Audit;
use Yajra\DataTables\DataTables;

class AuditTrailController extends Controller
{
    private $page_title         = "Audit Trails";
    private $page_description   = "Audit Trail Management";

    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:audit.index|audit.delete', ['only' => ['index','destroy']]);
        $this->middleware('permission:audit.delete',   ['only' => ['destroy']]);
    }

    public function index(Request $req)
    {
        if($req->ajax()){
            $model = Audit::with('user','auditable')->orderBy('id', 'DESC')->get();

            return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('created_at', function($data)
            {
                return "<b>". date('Y-m-d H:i:s', strtotime($data->created_at)) . "</b><br> " . Carbon::parse($data->created_at)->diffForHumans() . " ";
            })
            ->addColumn('user', function($data){
                if(isset($data->user->name)){
                    return "<p>". $data->user->name ."<br>". $data->user->email . "<p>";
                }else{
                    return "-";
                }
            })
            ->addColumn('record', function($data){
                if(isset($data->auditable)){
                    $route = explode('\\', $data->auditable_type);
                    $route = end($route);
                    $route = strtolower($route) . 's';
                    return "<a href='". route($route.'.show', Crypt::encrypt($data->auditable_id))."'>".$data->auditable_id."</a>";
                }else{
                    return $data->auditable_id;
                }
            })
            ->addColumn('event', function($data)
            {
                return eventType($data->event);
            })
            ->addColumn('action', function($data){
            $button = ' <a class="btn btn-icon btn-light btn-sm btn-hover-warning" href="'.  route('audits.show',Crypt::encrypt($data->id)) .'" data-toggle="tooltip"  data-theme="dark" title="Show">
                '. Metronic::getSVGController("media/svg/icons/General/Settings-1.svg", "svg-icon-md svg-icon-warning") .'
                </a>';
                if(auth()->user()->can('audit.delete')){
                    $button .= ' <button class="btn btn-icon btn-light btn-sm btn-delete btn-hover-danger" data-remote="'. route('audits.destroy', Crypt::encrypt($data->id)) .'" data-toggle="tooltip"  data-theme="dark" title="Delete">
                        '. Metronic::getSVGController("media/svg/icons/General/Trash.svg", "svg-icon-md svg-icon-danger") .'
                    </button>';
                }
                return $button;
            })
            ->rawColumns(['action','user','record','event','created_at'])
            ->make(true);
        }

        $page_title         = $this->page_title;
        $page_description   = $this->page_description;
        $page_breadcrumbs   = [['page'  => 'audits','title' =>  'Audits']];

        return view('master.audit.index', compact('page_title', 'page_description', 'page_breadcrumbs'));
    }
    public function show($id)
    {
        $id     = Crypt::decrypt($id);
        $record = Audit::with('user','auditable')->find($id);
        $old_values     = $record->old_values;
        $new_values     = $record->new_values;

        $page_title         = $this->page_title;
        $page_description   = $this->page_description;
        $page_breadcrumbs   = [['page'  => 'audits','title' =>  'Audits'], ['page'  => 'audits/show','title' =>  'Audits Show']];
        $page_buttons        = [
            ['route'=> 'audits.index', 'title' => 'Back','svg' => 'Navigation/Angle-double-left.svg', 'class' => 'btn-info'],
        ];
        debug($old_values, $new_values);
        return view('master.audit.show', compact('page_title', 'page_description', 'page_breadcrumbs','page_buttons','record','new_values','old_values'));
    }

    public function destroy($id)
    {
        $id     = Crypt::decrypt($id);
        $delete = Audit::find($id);
        $delete->delete() == true
            ? $return = ['code' => 'success', 'msg' => 'data deleted successfully']
            : $return = ['code' => 'error', 'msg' => 'something went wrong!'];

        return response()->json($return);
    }
}
