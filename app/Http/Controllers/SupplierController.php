<?php

namespace App\Http\Controllers;

use App\Add_supplier;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupplierController extends Controller
{

    public function addSupplier(Request $request)
    {
        // return 'hello';
        // return $request->input('fname');
        $validator = $this->validate($request, [

            'supplier_name' => 'required',
            'supplier_description' => 'required',
            'website' => 'required',

            'company' => 'required',
            'supplier_email' => 'required|email|max:25',
            'supplier_contact_fname' => 'required',
            'supplier_phone' => 'required|max:10',
            'supplier_mobile' => 'required|max:10',

        ]);
        // dd($request->input('supplier_contact_lname'));
        Add_supplier::create([
            'supplier_name' => $request->input('supplier_name'),
            'supplier_description' => $request->input('supplier_description'),
            'company' => $request->input('company'),
            'website' => $request->input('website'),
            'supplier_email' => $request->input('supplier_email'),
            'supplier_contact_fname' => $request->input('supplier_contact_fname'),
            'supplier_contact_lname' => $request->input('supplier_contact_lname'),
            'supplier_phone' => $request->input('supplier_phone'),
            'supplier_mobile' => $request->input('supplier_mobile'),
            'supplier_country' => $request->input('supplier_country'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'postalcode' => $request->input('postalcode'),
            'street' => $request->input('street'),

        ]);

        return redirect()->route('suppliers')->with('info', 'Supplier successfully added');

    }
}
