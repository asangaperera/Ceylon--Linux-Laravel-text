<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class regionController extends Controller
{
    public function addRegion()
    {
      return view('post_region');
    }
  public function saveRegion(Request $request)

    {
     DB::table('regions')->insert([
         'zone'=>$request->zone,
         'r_name'=>$request->r_name
     ]);
     return back()->with('post_region','Add Region Successfully');
    }
    public function region()
    {
      $regions = DB::table('regions')->get();
      return view('region',compact('regions'));
    }
  public function editRegion($r_id) 
  {
    $region = DB::table('regions')->where('r_id', $r_id)->first();
    return view('edit-region',compact('region'));
  }
  public function updateRegion(Request $request)

    {
      DB::table('regions')->where('r_id',$request->r_id)->update([
        'zone'=>$request->zone,
        'r_nmae'=>$request->r_name 
       ]);
       return back()->with('region_update','Region Updated Successfuly');
  }
    public function deleteRegion($r_id)
  {
    DB::table('regions')->where('r_id', $r_id)->delete();
    return back()->with('region','Region deleted Successfuly');
  }
  
}