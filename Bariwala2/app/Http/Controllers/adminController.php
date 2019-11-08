<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class adminController extends Controller
{
    public function unitDetails() 
    {
        $users=DB::table('tenants')->get();
        return view('unitDetails',compact('users'));
    }

    public function addUser() 
    {
        return view('addUser');
    }

    public function memberList() 
    {
        $users=DB::table('tenants')->get();
        return view('memberList',compact('users'));
    }
    
    public function bills() 
    {
        return view('bills');
    }
    
    public function payment() 
    {
        return view('payment');
    }
    
    public function complains() 
    {
        return view('complains');
    }
    
    public function notice() 
    {
        return view('notice');
    }
    
    public function helpLine() 
    {
        $help=DB::table('helps')->get();
        return view('helpLine',compact('help'));
        return view('helpLine');
    }
}
