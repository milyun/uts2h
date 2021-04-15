<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class ProductController extends Controller {
    /**
;     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = $product = DB::table('product')->paginate(3);
        return view('product.index',compact('product'));
        
    }

    public function search(){
        $search = $_GET['search'];
        if($search){
            $product =Product::where("name","LIKE","%$search%")->paginate(3);
        }
        return view('product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'IdProduct'=> 'required',
            'Product_name' => 'required',
            'Category' => 'required',
            'Price' => 'required',
            'Quantity' => 'required',
            ]);

        Product::create($request->all());

        return redirect()->route('product.index')->with('success', 'Product Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Product = Product::find($id);
        return view('Product.detail', compact('Product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Product = DB::table('Product')->where('id', $id)->first();;
        return view('Product.edit', compact('Product'));
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
        $request->validate([
            'Product_Name' => 'required',
            'Category' => 'required',
            'Price' => 'required',
            'qty' => 'required',
            ]);

        Product::find($id)->update($request->all());
        
        return redirect()->route('Product.index')->with('success', 'Product Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('Product.index')-> with('success', 'Product Successfully Deleted');
    }
}