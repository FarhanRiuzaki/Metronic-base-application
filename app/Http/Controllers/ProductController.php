<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use DataTables;
use Illuminate\Support\Facades\Crypt;

class ProductController extends Controller
{
    private $page_title         = "Products";
    private $page_description   = "Product Management";

    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:product.index|product.create|product.edit|product.delete', ['only' => ['index','store']]);
        $this->middleware('permission:product.create',  ['only' => ['create','store']]);
        $this->middleware('permission:product.edit',    ['only' => ['edit','update']]);
        $this->middleware('permission:product.delete',  ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
       *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        if($req->ajax()){
            $model = Product::query();

            return DataTables::of($model)
            ->addColumn('action', function($data){
                return ButtonSED($data, 'products', 'product');
            })
            ->rawColumns(['action'])
            ->make(true);
        }

        $page_title        = $this->page_title;
        $page_description  = $this->page_description;
        $page_breadcrumbs  = [['page'  => 'products','title' =>  'Products']];
        $page_buttons      = [
            ['route'=> 'products.create', 'can' => 'product.create', 'title' => 'New Record', 'class' => 'btn-primary', 'svg'=> 'Design/Flatten.svg']
        ];

        return view('master.product.index', compact('page_title', 'page_description', 'page_breadcrumbs','page_buttons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title        = $this->page_title;
        $page_description  = $this->page_description;
        $page_breadcrumbs  = [['page'  => 'products','title' =>  'Products'], ['page'=>'products/create','title'=>'Product Create']];
        $page_buttons      = [
            ['route'=> 'products.index', 'title' => 'Back','svg' => 'Navigation/Angle-double-left.svg', 'class' => 'btn-info'],
            ['route'=> 'form', 'id-form' => 'MyForm', 'title' => 'Submit','svg' => 'Communication/Sending.svg', 'class' => 'btn-primary']
        ];

        return view('master.product.create', compact('page_title','page_description','page_breadcrumbs', 'page_buttons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        foreach ($request->input('document', []) as $file) {
            $product->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('document');
        }
        return redirect()->route('products.index')
        ->with(toaster($this->page_title . ' created successfully', 'success', 'Success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id         = Crypt::decrypt($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id         = Crypt::decrypt($id);
        $record     = Product::findOrFail($id);
        // dd($record->getFirstMediaUrl('document'));

        $page_title        = $this->page_title;
        $page_description  = $this->page_description;
        $page_breadcrumbs  = [['page'  => 'products','title' =>  'Products'], ['page'=>'products/create','title'=>'Product Create']];
        $page_buttons      = [
            ['route'=> 'products.index', 'title' => 'Back','svg' => 'Navigation/Angle-double-left.svg', 'class' => 'btn-info'],
            ['route'=> 'form', 'id-form' => 'MyForm', 'title' => 'Submit','svg' => 'Communication/Sending.svg', 'class' => 'btn-primary']
        ];

        return view('master.product.edit', compact('page_title','page_description','page_breadcrumbs', 'page_buttons','record'));
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
        //
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
        $delete = Product::findOrFail($id);
        $delete->delete() == true
            ? $return = ['code' => 'success', 'msg' => 'data deleted successfully']
            : $return = ['code' => 'error', 'msg' => 'something went wrong!'];

        return response()->json($return);
    }
}
