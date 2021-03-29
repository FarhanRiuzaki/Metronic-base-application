<?php

namespace App\Http\Controllers;

use App\Classes\Theme\Metronic;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class BugController extends Controller
{
    private $page_title         = "Bugs Reporting";
    private $page_description   = "Bugs Reporting Management";

    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:bug.index|bug.delete', ['only' => ['index','destroy']]);
        $this->middleware('permission:bug.delete',   ['only' => ['destroy']]);
    }

    public function index(Request $req)
    {
        if($req->ajax()){
            $model = DB::table('bug_reporting')->get();

            return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('created_at', function($data)
            {
                return date('Y-m-d H:i:s', strtotime($data->created_at)) . " [" . Carbon::parse($data->created_at)->diffForHumans() . "] ";
            })
            ->addColumn('file', function($data)
            {
                return "<p> ...".substr($data->file, -35)."<br>Line: ". $data->line."</p>";
            })
            ->addColumn('action', function($data){
            $button = ' <a class="btn btn-icon btn-light btn-sm btn-hover-warning" href="'.  route('bugs.show',Crypt::encrypt($data->id)) .'" data-toggle="tooltip"  data-theme="dark" title="Show">
                '. Metronic::getSVGController("media/svg/icons/General/Settings-1.svg", "svg-icon-md svg-icon-warning") .'
                </a>';
                if(auth()->user()->can('bug.delete')){
                    $button .= ' <button class="btn btn-icon btn-light btn-sm btn-delete btn-hover-danger" data-remote="'. route('bugs.destroy', Crypt::encrypt($data->id)) .'" data-toggle="tooltip"  data-theme="dark" title="Delete">
                        '. Metronic::getSVGController("media/svg/icons/General/Trash.svg", "svg-icon-md svg-icon-danger") .'
                    </button>';
                }
                return $button;
            })
            ->rawColumns(['action','file'])
            ->make(true);
        }

        $page_title         = $this->page_title;
        $page_description   = $this->page_description;
        $page_breadcrumbs   = [['page'  => 'bugs','title' =>  'Bugs Reporting']];

        return view('master.bug.index', compact('page_title', 'page_description', 'page_breadcrumbs'));
    }

    public function show($id)
    {
        $page_title         = $this->page_title;
        $page_description   = $this->page_description;
        $page_breadcrumbs   = [['page'  => 'bugs','title' =>  'Bugs Reporting'], ['page'  => 'bugs/show','title' =>  'Bugs Show']];

        return view('master.bug.show', compact('page_title', 'page_description', 'page_breadcrumbs'));
    }
}
