<?php

namespace App\Http\Controllers;

use App\Add_supplier;
use App\Brand;
use App\Http\Controllers\Controller;
use App\Product;
use App\Type;

class PagesController extends Controller
{
    public function getRegister()
    {
        return view('register');
    }

    public function getSettings()
    {
        return view('settings');
    }
    public function getLogin()
    {
        return view('login');
    }

    public function getIndex()
    {
        return view('index');
    }

    public function getproducts()
    {
        $protypes = $this->getProductTypes();
        $probrand = $this->getProductBrand();
        $prosuppliers = $this->getProductSuppliers();

        return view('products')->with('types', $protypes)->with('brands', $probrand)->with('suppliers', $prosuppliers);

    }

    public function getsales()
    {
        return view('sales');
    }

    public function getpos()
    {
        return view('pos');
    }

    public function getsuppliers()
    {
        return view('suppliers');
    }

    public function getreciept()
    {
        return view('reciept');
    }
    public function getstockcontrol()
    {
        return view('stockcontrol');
    }
    public function getinventorycount()
    {
        return view('inventorycount');
    }

    public function getbrands()
    {
        return view('brands');
    }

    public function gettypes()
    {
        return view('types');
    }

    public function gettax()
    {
        return view('setUpTax');
    }

    public function gettaxcountry()
    {
        return view('taxcountry');
    }

    public function getnewStockOrder()
    {
        $prsuppliers = $this->getProductSuppliers();
        $prproducts = $this->getProductname();

        return view('newStockOrder')->with('suppliers', $prsuppliers)->with('products', $prproducts);
    }

// EXTRA FUNCTIONS
    public function getProductTypes()
    {
        $types = Type::get();
        return $types;

        // foreach ($types as $type) {
        //     dd($type['type_name']);
        // }
    }

    public function getProductBrand()
    {
        $brands = Brand::get();
        return $brands;

    }

    public function getProductSuppliers()
    {
        $suppliers = Add_supplier::get();
        return $suppliers;

    }

    public function getProductname()
    {
        $products = Product::get();
        return $products;

    }

}
