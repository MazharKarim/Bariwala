<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class userController extends Controller
{

    // public function addUser() 
    // {
    //     return view('addUser');
    // }

    // public function memberList() 
    // {
    //     return view('memberList');
    // }
    
    public function bills() 
    {
        $bill=DB::table('bills')->get();
        return view('user/bills',compact('bill'));
    }
    
    public function payment() 
    {
        return view('user/payment');
    }
    
    public function complains() 
    {
        return view('user/complains');
    }
    
    public function notice() 
    {
        $notice=DB::table('notices')->get();
        return view('user/notice',compact('notice'));
    }
    
    public function helpLine() 
    {
        $help=DB::table('helps')->get();
        return view('user/helpLine',compact('help'));
        return view('user/helpLine');
    }
}
