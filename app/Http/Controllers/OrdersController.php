<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Mail;
use Mail;
use App\Mail\OrderShipped;
use App\Order;
use App\Order_product;
use App\User;
use Auth;

class OrdersController extends Controller
{



  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct( )
  {

  }

    public function store(Request $request)
    {
        $name                                   = $request->get('name');
        $email                                  = $request->get('email');
        $phone                                  = $request->get('phone');
        $comment                                = $request->get('comment');

        $cart                                   = $request->session()->get('cart');
        $cart_data                              = [];
        $total                                  = 0;
        if ( count($cart) ) {
            $cart_ids                           = implode(", ", array_keys($cart));
            $cart_ids                           = explode(',', $cart_ids);
            $cart_array                         = DB::table('products')->whereIn('id', $cart_ids)->get();
            foreach ( $cart_array as $key       => $value ) {
                $cart_data[$value->id]['id']    = $value->id;
                $cart_data[$value->id]['name']  = $value->name;
                $cart_data[$value->id]['image'] = $value->image;
                $cart_data[$value->id]['slug']  = $value->slug;
                $cart_data[$value->id]['cost']  = $value->cost;
                $cart_data[$value->id]['qty']   = $cart[$value->id];
                $total                         += $value->cost*$cart[$value->id];
            }
        }

        $data = [
            'name'      => $name,
            'email'     => $email,
            'phone'     => $phone,
            'comment'   => $comment,
            'order'     => json_encode($cart_data),
            'total'     => $total,
            'orderQty'  => $cart_data[$value->id]['qty'],
            'orderName' => $cart_data[$value->id]['name'],
            'orderCost' => $cart_data[$value->id]['cost'],
        ];

      $orderUser = new Order;
      $orderUser->user_id = 1;
      // $orders->qty        = $cart_data[$value->id]['qty'];
      // $orders->order_id   =    $cart_data[$value->id]['slug'];
      $orderUser->total      =  $total;
      $orderUser->delivered      = 0;
      $orderUser->save();
      //
      $order = new Order_product;
      $order->product_id = $cart_data[$value->id]['id'];
      $order->qty        = $cart_data[$value->id]['qty'];
      $order->order_id   = $orderUser->id;
      $order->total      = $data['total'];
      $order->save();


    //  $order =  json_encode($cart_data);


    Mail::to($email)->send(new OrderShipped($data));


        // if ( !empty($email) ) {
        //
        //     Mail::send('emails.order.ordershipped', $data, function($message) use ($email, $name)
        //
        //     {
        //         $message->to($email, $name)->subject('Thanks! Your order');
        //     });
        // }

$request->session()->forget('cart');
        return view('orders.success');

    }

}
