<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validazione
        $request->validate([
            'name' => 'required|string|max:255',
            'material' => 'required|string|max:255',
            'size' => 'required|string',
            'description' => 'required|string',
            'old_price' => 'nullable|numeric',
            'price' => 'required|numeric',
            'img' => 'nullable|mimes:jpeg,bmp,png',
            'img_2' => 'nullable|mimes:jpeg,bmp,png',
            'img_3' => 'nullable|mimes:jpeg,bmp,png',
            'available' => 'sometimes|accepted'
        ]);
        //prendo i dati dalla request
        $data = $request->all();
        $newProduct = new Product();
        $newProduct->fill($data);
        $newProduct->available = isset($data['available']);
        if (isset($data['img'])){
            $newProduct->img= Storage::put('uploads', $data['img']);

        }
        if (isset($data['img_2'])){
            $newProduct->img_2= Storage::put('uploads', $data['img_2']);

        }
        if (isset($data['img_3'])){
            $newProduct->img_3= Storage::put('uploads', $data['img_3']);

        }
      
        $newProduct->save();
        //redirect
        return redirect()->route('admin.products.show', $newProduct->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
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
        //validazione
        $request->validate([
            'name' => 'required|string|max:255',
            'material' => 'required|string|max:255',
            'size' => 'required|string',
            'description' => 'required|string',
            'old_price' => 'nullable|numeric',
            'price' => 'required|numeric',
            'img' => 'nullable|mimes:jpeg,bmp,png',
            'img_2' => 'nullable|mimes:jpeg,bmp,png',
            'img_3' => 'nullable|mimes:jpeg,bmp,png',
            'available' => 'sometimes|accepted'
        ]);
        //aggiornamento
        $data = $request->all();
        $product->fill($data);
        $product->available = isset($data['available']);
        if(isset($data['img'])) {
            if($product->img) {
                Storage::delete($product->img);
            }

            $product->img = Storage::put('uploads', $data['img']);
        }
        if(isset($data['img_2'])) {
            if($product->img_2) {
                Storage::delete($product->img_2);
            }

            $product->img_2 = Storage::put('uploads', $data['img_2']);
        }
        if(isset($data['img_3'])) {
            if($product->img_3) {
                Storage::delete($product->img_3);
            }

            $product->img_3 = Storage::put('uploads', $data['img_3']);
        }
        $product->save();
        //redirect
        return redirect()->route('admin.products.show', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if($product->img) {
            Storage::delete($product->img);
        }
        if($product->img_2) {
            Storage::delete($product->img_2);
        }
        if($product->img_3) {
            Storage::delete($product->img_3);
        }
        $product->delete();

        return redirect()->route('admin.products.index');
    }
}
