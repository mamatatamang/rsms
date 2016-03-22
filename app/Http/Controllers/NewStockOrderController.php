<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\NewStockOrder;
use Illuminate\Http\Request;

class NewStockOrderController extends Controller
{

    public function addnewStockOrder(Request $request)
    {

        NewStockOrder::create([

            'order_name' => $request->input('order_name'),

            'supplierid' => $request->input('supplierid'),
            'productid' => $request->input('productid'),
            'quantity' => $request->input('quantity'),

        ]);
        return redirect()->route('newStockOrder');

    }

}
