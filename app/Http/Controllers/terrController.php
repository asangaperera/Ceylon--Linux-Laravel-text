<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class terrController extends Controller
{
    public function addTerr()
    {
      return view('post-terr');
    }
  public function saveTerr(Request $request)

    {
     DB::table('terrs')->insert([
         'zone'=>$request->zone,
         'regi'=>$request->regi,
         't_name'=>$request->t_name
         ]);
     return back()->with('post-terr','Add Territory Successfully');
    }
    public function terr()
    {
      $terrs = DB::table('terrs')->get();
      return view('terr',compact('terrs'));
    }
  public function editTerr($t_id) 
  {
    $terr = DB::table('terrs')->where('t_id', $t_id)->first();
    return view('edit-terr',compact('terr'));
  }
  public function updateTerr(Request $request)

    {
      DB::table('terrs')->where('t_id',$request->t_id)->update([
        'zone'=>$request->zone,
        'regi'=>$request->regi,
        't_name'=>$request->t_name
       ]);
       return back()->with('terr_update','Territory Updated Successfuly');
  }
    public function deleteTerr($t_id)
  {
    DB::table('terrs')->where('t_id', $t_id)->delete();
    return back()->with('terr','Territory deleted Successfuly');
  }
  
}
