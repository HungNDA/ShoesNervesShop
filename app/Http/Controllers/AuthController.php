<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tbadmin;
use App\Models\Tbproduct;
use Illuminate\Support\Facades\Session;
// use Session;


class AuthController extends Controller
{
    public function loginAdminView()
    {
        return view('authen.login');
    }

    public function loginAdmin(Request $request){

        $admin = Tbadmin::where('adminAccount', '=', $request->username)->first();
        if($admin){
            if($admin->adminPassword = $request->password){
                $request->session()->put('loginId', $admin->adminID);
                return redirect('Product-list');
            }else{
                return back()->with('fail','This passwords do not match');
            }
        }else{
            return back()->with('fail','This account does not exist');
        }
    }

    public function indexAdmin()
    {
        $dataAdmin = array();
        $data = Tbproduct::get();
        if(Session::has('loginId')){
            $dataAdmin = Tbadmin::where('adminID', '=', Session::get('loginId'))->first();
        }
        return view('admin.adminProduct', compact('dataAdmin', 'data'));
    }

    public function logoutAdmin(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login-admin-view');
        }
    }
}
