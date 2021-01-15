<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Add an product to the database
     */
    public function addproduct(Request $request)
    {
        if ( !$request->filled(['name','price','stocks', 'expiry_date']) )
        return redirect()->route('#')->with('message','Some POST data are missing.');

        $product = new Product();
        $product->product_name = $request->name;
        $product->product_price = $request->price;
        $product->product_stocks = $request->stocks;
        $product->product_expiry_date = $request->expiry_date;

        try
        {
            $product->save();
        }
        catch (\Illuminate\Database\QueryException $e)
        {
            return redirect()->route('#')
                ->with('message','Sorry, this product still exists');
        }

        return redirect()->route('#')->with('message', 'The product has been added');
    }

    /**
     * return the home page with all the product present in the database
     */
    public function home(Request $request)
    {
        $products = Product::all(); // = SELECT * FROM Product;
        return view('home')->with('products', $products);
    }
}