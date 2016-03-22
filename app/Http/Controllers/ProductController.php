<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Product;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function addProduct(Request $request)
    {

        Product::create([

            'product_name' => $request->input('product_name'),
            'typeid' => $request->input('typeid'),
            'brandid' => $request->input('brandid'),
            'supplierid' => $request->input('supplierid'),

            'supply_price' => $request->input('supply_price'),
            'price_exc_tax' => $request->input('price_exc_tax'),
            'sales_tax' => $request->input('sales_tax'),
            'price_inc_tax' => $request->input('price_inc_tax'),
            'varient_attribute' => $request->input('varient_attribute'),
            'varient_default_value' => $request->input('varient_default_value'),
            'barcode' => $request->input('barcode'),
            'current_stock' => $request->input('current_stock'),

        ]);
        return redirect()->route('products')->with('info', 'Supplier successfully added');

    }

    public function index()
    {
        $products = DB::table('products')->get();

        return view('products', ['products' => $products]);
    }

}
