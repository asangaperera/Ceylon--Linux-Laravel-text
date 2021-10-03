<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class userController extends Controller
{
    public function addUser()
    {
      return view('post-user');
    }
  public function saveUser(Request $request)

    {
     DB::table('users')->insert([
         'name'=>$request->name,
         'nic'=>$request->nic,
         'address'=>$request->address,
         'mobile'=>$request->mobile,
         'email'=>$request->email,
         'gender'=>$request->gender,
         'terr'=>$request->terr,
         'userName'=>$request->userName,
         'password'=>$request->password

     ]);
     return back()->with('user','Add user Successfully');
    }
    public function user()
    {
      $users = DB::table('users')->get();
      return view('user',compact('users'));
    }
}