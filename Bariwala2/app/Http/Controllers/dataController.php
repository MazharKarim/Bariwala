<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class dataController extends Controller
{
    //
    public function storeUser(Request $req)
    {
        $validateData = $req->validate([
            'name' => 'required|max:250|min:1',
            'occupation' => 'required|max:250|min:1',
            'relegion' => 'required|max:250|min:1',
            'email' => 'required|unique:tenants|max:250|min:1',
            'phone' => 'required|unique:tenants|max:250|min:1',
            'nid' => 'required|unique:tenants|max:250|min:1',
            'password' => 'required|max:250|min:1',
            'permanentaddress' => 'required|max:250|min:1',
            'floor' => 'required|max:250|min:1',
            'unit' => 'required|unique:tenants|max:250|min:1',
            'rent' => 'required|max:250|min:1',
        ]);
        $data=array();
        $data['name']=$req->name;
        $data['occupation']=$req->occupation;
        $data['relegion']=$req->relegion;
        $data['email']=$req->email;
        $data['phone']=$req->phone;
        $data['nid']=$req->nid;
        $data['password']=$req->password;
        $data['permanentaddress']=$req->permanentaddress;
        $data['floor']=$req->floor;
        $data['unit']=$req->unit;
        $data['rent']=$req->rent;
        $users=DB::table('tenants')->insert($data);
        session()->Flash('success','New tenant has been added successfully');
        return back();
    }

    public function createNotice(Request $req)
    {
        $validateData = $req->validate([
            'flat' => 'required|max:250|min:1',
            'subject' => 'required|max:250|min:1',
            'description' => 'required|max:250|min:1',
        ]);
        $data=array();
        $data['flat']=$req->flat;
        $data['subject']=$req->subject;
        $data['description']=$req->description;
        $notice=DB::table('notices')->insert($data);
        session()->Flash('success','Notice has been created successfully');
        return back();
    }

    public function createComplain(Request $req)
    {
        $validateData = $req->validate([
            'subject' => 'required|max:250|min:1',
            'description' => 'required|max:250|min:1',
        ]);
        $data=array();
        $data['subject']=$req->subject;
        $data['description']=$req->description;
        $complain=DB::table('complains')->insert($data);
        session()->Flash('success','Notice has been created successfully');
        return back();
    }
}
