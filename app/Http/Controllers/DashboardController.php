<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbproduct;
use App\Models\Tbproducer;

class DashboardController extends Controller
{
    //
    public function DashComp(){
        return view('dashboard.Company');
    }
    public function DashIndex(){
        return view('dashboard.dashboard');
    }

    public function DashProduct()
    {
        $data = Tbproduct::get();
        return view('dashboard.ProductDashboard', compact('data'));
    }
    public function details($id)
    {
        $product = Tbproduct::where('productID', '=', $id)->first();
        return view('dashboard.single', compact('product'));
    }
}
