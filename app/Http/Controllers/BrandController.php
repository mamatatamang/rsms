<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function addBrand(Request $request)
    {

        Brand::create([

            'brand_name' => $request->input('brand_name'),
            'brand_description' => $request->input('brand_description'),

        ]);

        return redirect()->route('brands')->with('info', 'Brand successfully added');

    }

}
