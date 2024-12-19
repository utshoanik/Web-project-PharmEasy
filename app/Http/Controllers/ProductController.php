<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Prescription;
use App\Models\category;

use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    //
    function index()
    {
        $data= Product::all();
        $data1=category::all();

       return view('product',['products'=>$data,'categories'=>$data1]);
    }
    function detail($id)
    {
        $data =Product::find($id);
        return view('detail',['product'=>$data]);
    }
    function search(Request $req)
    {
        $data= Product::
        where('name', 'like', '%'.$req->input('query').'%')
        ->get();
        return view('search',['products'=>$data]);
    }
    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
           $cart= new Cart;
           $cart->user_id=$req->session()->get('user')['id'];
           $cart->product_id=$req->product_id;
           $cart->save();
           return redirect('/');

        }
        else
        {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
     $userId=Session::get('user')['id'];
     return Cart::where('user_id',$userId)->count();
    }
    function cartList()
    {
        $userId=Session::get('user')['id'];
       $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);
    }
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function orderNow()
    {
        $userId=Session::get('user')['id'];
        $total= $products= DB::table('cart')
         ->join('products','cart.product_id','=','products.id')
         ->where('cart.user_id',$userId)
         ->sum('products.price');
 
         return view('ordernow',['total'=>$total]);
    }
    function orderPlace(Request $req)
    {
        $userId=Session::get('user')['id'];
         $allCart= Cart::where('user_id',$userId)->get();
         foreach($allCart as $cart)
         {
             $order= new Order;
             $order->product_id=$cart['product_id'];
             $order->user_id=$cart['user_id'];
             $order->status="pending";
             $order->payment_method=$req->payment;
             $order->payment_status="pending";
             $order->address=$req->address;
             $order->save();
             Cart::where('user_id',$userId)->delete(); 
         }
         $req->input();
         return redirect('/');
    }
    function myOrders()
    {
        $userId=Session::get('user')['id'];
        $orders= DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->where('orders.user_id',$userId)
         ->get();
 
         return view('myorders',['orders'=>$orders]);
    }


    function prescriptionStore(Request $request)
    {

        $info=new Prescription();
        $userId=Session::get('user')['id'];
        $userInfo=User::find($userId);
        $info->name=$userInfo->name;
        $info->user_id=$userId;
        $info->address=$request->address;


        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('public/images', $fileName);
        $info->photo = 'storage/images/'.$fileName;

        // Prescription::create($info);
        $info->save();
        return redirect()->route('homepage');
    }

    function cat_detail( $request){

         $data=DB::table('products')->where('category',$request)->get();
        //  echo "<pre>";
        //  print_r($data);


        return view('catProductShow',['data'=>$data]);
    }
}
