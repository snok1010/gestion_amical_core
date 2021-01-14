<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addproduct(Request $request)
    {
        if ( !$request->filled(['name','price','stocks', 'expiry_date']) )
        return redirect()->route('#')->with('message','Some POST data are missing.');

        $product = new Product();
        $product->name = $request->name;

        try
        {
            $product->save();
        }
        catch (\Illuminate\Database\QueryException $e)
        {
            return redirect()->route('#')
                ->with('message','Sorry, this login still exists. Please choose another one.');
        }

        return redirect()->route('#')->with('The product has been added ');
    }
}
