<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{

    public function addType(Request $request)
    {

        Type::create([

            'type_name' => $request->input('type_name'),

        ]);

        return redirect()->route('types')->with('info', 'Brand successfully added');

    }

}
