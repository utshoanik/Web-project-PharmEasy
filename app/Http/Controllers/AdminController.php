<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Product;
use App\Models\Order;
use App\Models\Prescription;
use App\Models\User;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class AdminController extends Controller
{
   function home(){
    $p=Product::count();
    $o=Order::count();
    $pre=Prescription::count();
    $user=User::count();
    return view('dashboard',['pro'=>$p,'or'=>$o,'pres'=>$pre,'user'=>$user]);
   }

   function index(){

      $category = Order::all();
      $product=Product::all();
 
        return view('orders/index', ['category' => $category]);
      
   }

   public function confirm($id,$name)
    {
      $order=Order::find($id);
      $notification=new Notification();
      $notification->user_id=$order->user_id;
      $notification->product_id=$order->product_id;
      $notification->product_name=$name;
      $notification->message='Confirm';
      $notification->save();
      $order->delete();
        return redirect()->route('order');
    }

    public function delete($id,$name)
    {
      $order=Order::find($id);
      $notification=new Notification();
      $notification->user_id=$order->user_id;
      $notification->product_id=$order->product_id;
      $notification->product_name=$name;
      $notification->message='cancelled';
      $notification->save();
      $order->delete();
        return redirect()->route('order');
    }


    public function pre_index()
    {

      $prescription = Prescription::all();
        return view('prescription/index', ['prescription' => $prescription]);
    }

    public function pre_confirm($id)
    {
      $prescription=Prescription::find($id);
      $notification=new Notification();
      $notification->user_id=$prescription->user_id;
      //$notification->product_id=$prescription->product_id;
     // $notification->product_name=$name;
      $notification->message='pres_confirm';
      $notification->save();
      $prescription->delete();
        return redirect()->route('pre_order');
      
    }

    public function pre_delete($id)
    {
      $order=Prescription::find($id);
      $notification=new Notification();
      $notification->user_id=$order->user_id;
      //$notification->product_id=$order->product_id;
      //$notification->product_name=$name;
      $notification->message='pres_cancel';
      $notification->save();
      $order->delete();
        return redirect()->route('pre_order');
    }


    function user_info()
    {
      $user = User::all();
       return view('user/index', ['user' => $user]);

    }

    function deleteuser($data)
    {
      $info=User::find($data);
      $info->delete();
      return redirect()->route('userinfo');
    }

}
