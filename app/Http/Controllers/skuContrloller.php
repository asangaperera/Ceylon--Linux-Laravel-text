<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class skuController extends Controller
{
    public function addSku()
    {
      return view('post-sku');
    }
  public function saveSku(Request $request)

    {
     DB::table('skus')->insert([
         'sku_name'=>$request->sku_name,
         'mrp'=>$request->mrp,
         'dis_price'=>$request->dis_price,
         'weight'=>$request->weight,
         'w_type'=>$request->w_type
     ]);
     return back()->with('post-sku','Add SKU Successfully');
    }
    public function sku()
    {
      $skus = DB::table('skus')->get();
      return view('sku',compact('skus'));
    }
  public function editSku($s_id) 
  {
    $sku = DB::table('skus')->where('s_id', $s_id)->first();
    return view('edit-sku',compact('sku'));
  }
  public function updateSku(Request $request)

    {
      DB::table('skus')->where('s_id',$request->s_id)->update([
        'sku_name'=>$request->sku_name,
        'mrp'=>$request->mrp,
        'dis_price'=>$request->dis_price,
        'weight'=>$request->weight,
        'w_type'=>$request->w_type
       ]);
       return back()->with('sku_update','SKU Updated Successfuly');
  }
    public function deleteSku($s_id)
  {
    DB::table('skus')->where('s_id', $s_id)->delete();
    return back()->with('sku','SKU deleted Successfuly');
  }
  
}
