<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // app/Http/Controllers/AdminController.php

    public function List()
    {
        $products_list = Product::get();
        return view('admin', compact('products_list'));
    }
    public function NewProduct()
    {
        return view('new_product');
    }
    public function AddToDatabase(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required',
            'stock_quantity' => 'required',
            'model' => 'required',
            'brand' => 'required',
            'rating' => 'required',
            'reviews' => 'required',
        ]);
        Product::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'price' => $request['price'],
            'image' => $request['image'],
            'stock_quantity' => $request['stock_quantity'],
            'model' => $request['model'],
            'brand' => $request['brand'],
            'rating' => $request['rating'],
            'reviews' => $request['reviews'],
        ]);
        return redirect()
            ->route('admin')
            ->with('message', 'Successfully Inserted');
    }
    public function EditProduct(int $id)
    {
        $product = Product::find($id);
        return view('edit_product', compact('product'));
    }
    public function UpdateDatabase(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required',
            'stock_quantity' => 'required',
            'model' => 'required',
            'brand' => 'required',
            'rating' => 'required',
            'reviews' => 'required',
        ]);
        $id = $request->id;
        Product::find($id)->update([
            'name' => $request['name'],
            'description' => $request['description'],
            'price' => $request['price'],
            'image' => $request['image'],
            'stock_quantity' => $request['stock_quantity'],
            'model' => $request['model'],
            'brand' => $request['brand'],
            'rating' => $request['rating'],
            'reviews' => $request['reviews'],
        ]);
        return redirect()
            ->route('admin')
            ->with('message', 'Successfully Edit');
    }
    public function DeleteProduct(Request $request)
    {
        $id = $request->id;
        Product::find($id)->delete();
        return redirect()
            ->route('admin')
            ->with('message', 'Successfully Deleted');
    }
}
