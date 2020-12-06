<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view('products.index', \compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request, [
            'name' => 'required', 
            'price' => 'required',
            'description' => 'required|min:120',
            'stock' => 'required',
            'img_path' => 'required'
        ]);

        $img_path = null;
        if ($request->hasFile('img_path')) {
            $img_path = $request->file('img_path')->store('uploads');
        }

        $datas = \array_merge($request->except('_token'), \compact('img_path'));

        Product::create($datas);
        \session()->flash('message', 'Has ben data added');
        return \redirect(\route('product.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'name' => 'required', 
            'price' => 'required',
            'description' => 'required|min:120',
            'stock' => 'required',
        ]);
        
        //jika tidak ada request image
        $img_path = $product->img_path ?? null;
        if ($request->hasFile('img_path')) {
            Storage::delete($product->img_path);
            $img_path = $request->file('img_path')->store('uploads');
        }

        $datas = \array_merge($request->except('_token'), \compact('img_path'));
        $product->update($datas);
        
        \session()->flash('message', 'Has ben data changed');
        return \redirect(\route('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if($product->img_path){
            Storage::delete($product->img_path);
        }
        $order = Order::where('product_id', $product->id)->first();
        if ($order != '') {
            $order->delete();
        }
        $product->delete();
        \session()->flash('message','Has ben data deleted');
        return \redirect()->back();
    }
}
