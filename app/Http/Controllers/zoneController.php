<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class zoneController extends Controller
{
    public function addZone()
    {
      return view('post');
    }
  public function saveZone(Request $request)

    {
     DB::table('zones')->insert([
         'zone_lg_des'=>$request->zone_lg_des,
         'sh_des'=>$request->sh_des
     ]);
     return back()->with('post','Add Zone Successfully');
    }
    public function zone()
    {
      $zones = DB::table('zones')->get();
      return view('zone',compact('zones'));
    }
  public function editZone($zone_id) 
  {
    $zone = DB::table('zones')->where('zone_id', $zone_id)->first();
    return view('edit-zone',compact('zone'));
  }
  public function updateZone(Request $request)

    {
      DB::table('zones')->where('zone_id',$request->zone_id)->update([
        'zone_lg_des'=>$request->zone_lg_des,
        'sh_des'=>$request->sh_des 
       ]);
       return back()->with('zone_update','Zone Updated Successfuly');
  }
    public function deleteZone($zone_id)
  {
    DB::table('zones')->where('zone_id', $zone_id)->delete();
    return back()->with('zone','Zone deleted Successfuly');
  }
  
}
