<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $cats = DB::table('categories')->get();
        $prods = DB::table('products')->paginate(8);
        if($user->isAdmin == 1){
          return view('home')->with("user",$user)->with("cats",$cats)->with("prods",$prods);
        }

        return view('welcome')->with("user",$user)->with("cats",$cats)->with("prods",$prods);
    }

    public function add_category(Request $request)
    {
        $user = Auth::user();
        if($user->isAdmin == 1){
          $stat = DB::table('categories')->insert(['name' => $request->name]);

          return redirect('/home');
        }
        return redirect('home');
    }


    public function categories_list(Request $request)
    {
        $user = Auth::user();
        if($user->isAdmin == 1){
          $cats = DB::table('categories')->get();

          return view('categories_list')->with('cats',$cats);
        }
        return redirect('home');
    }

    public function delete_category(Request $request)
    {
        $user = Auth::user();
        if($user->isAdmin == 1){
          DB::table('categories')->where('id', $request->id)->delete();

          return redirect('categories_list');
        }
        return redirect('home');
    }




    public function add_product(Request $request)
    {
        $user = Auth::user();
        if($user->isAdmin == 1){


          $imageName = time().'.'.$request->myImage->getClientOriginalExtension();
          $request->myImage->move(public_path('products'), $imageName);



          $stat = DB::table('products')->insert(
          [
              'title' => $request->title,
              'price' => $request->price,
              'description' => $request->description,
              'id_category' => $request->id_category,
              'img' => $imageName

          ]
          );

          return redirect('/home');
        }
        return redirect('home');
    }






    public function products_list(Request $request)
    {
        $user = Auth::user();
        if($user->isAdmin == 1){
          $cats = DB::table('products')->get();
          return view('products_list')->with('cats',$cats);
        }
        return redirect('home');
    }




    public function delete_product(Request $request)
    {
        $user = Auth::user();
        if($user->isAdmin == 1){
          DB::table('products')->where('id', $request->id_product)->delete();
          return redirect('products_list');
        }
        return redirect('home');
    }













    public function sc_add(Request $request)
    {
          //dd($request);
          $user = Auth::user();
          $stat = DB::table('shoping_cart')->insert(
          [    'id_product' => $request->id_product,    'id_user' => $request->id_user  ]
          );
          return redirect('/home');
    }



    public function sc_delete(Request $request)
    {
        $user = Auth::user();
          DB::table('shoping_cart')
          ->where('id_user', $user->id)
          ->where('id_product', $request->id_product)->delete();
          return redirect('/checkout');
    }






    public function success_purchase(Request $request)
    {
        $user = Auth::user();
          $stat = DB::table('compras')->insert(
          [
              'id_user' => $user->id,
              'direccion' => $request->direccion." Estado: ".$request->estado." CP: ".$request->cp." - Tel: ".$request->telefono,
              'cantidad' => $request->cantidad,
              'origen_pago' => $request->origen,
          ]
          );
          DB::table('shoping_cart')
          ->where('id_user', $user->id)->delete();
          return redirect('/buy_success');
    }


    public function mis_cursos(Request $request)
    {
        $user = Auth::user();
        if($user){
          $cats = DB::table('products')->get();
          return view('perfil.mis_cursos')->with('cats',$cats);
        }
        return redirect('home');
    }

}
