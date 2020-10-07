<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class shopController extends Controller
{



  public function show_item(Request $request)
  {
    $user = Auth::user();
    $find = DB::table('products')->where('id', $request->id)->first();
    $cats = DB::table('categories')->get();
    if($user){
      return view('showItem')->with("user",$user)->with('prod',$find)->with("cats",$cats);
    }else{
      return view('showItem')->with('prod',$find)->with("cats",$cats);
    }

  }

  public function checkout()
  {
    $user = Auth::user();
    $find = DB::table('products')->where('id', 0)->get();
    if($user){
      $cart = DB::table('shoping_cart')->where('id_user', $user->id)->get();
      $cont = 1;
      foreach($cart as $c){
        if($cont == 1){
          $find = DB::table('products')->where('id', $c->id_product)->get();
        }else{
          $find2 = DB::table('products')->where('id', $c->id_product)->get();
          if(!isset($mergedCollection)){ $mergedCollection = $find->merge($find2); }else{
              $mergedCollection = $mergedCollection->merge($find2);
          }
        }
        $cont++;
      }
      if(isset($mergedCollection)){
        $mergedCollection->all();
        $find = $mergedCollection; }
      return view('checkout')->with("user",$user)->with('prods',$find);
    }else{
      return redirect('/login');
    }
  }






  public function search(Request $request)
  {
    if(isset($request->category)){
      $find = DB::table('products')
      ->where('id_category', $request->category)->paginate();
    }else{
        $find = DB::table('products')->where('title', 'LIKE','%'.$request->search.'%')->paginate();
    }
    $user = Auth::user();
     $cats = DB::table('categories')->get();
     if($user){ return view('search_results')->with('prods',$find)->with("cats",$cats)->with("user",$user); }else{
      return view('search_results')->with('prods',$find)->with("cats",$cats);
    }
  }

}
