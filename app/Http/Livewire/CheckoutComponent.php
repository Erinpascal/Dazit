<?php

namespace App\Http\Livewire;

use App\Models\Order;
// use Gloudemans\Shoppingcart\Facades\Cart;
use Cart;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class CheckoutComponent extends Component
{
    public $ship_to_different;

    public $firstname;
    public $lastname;
    public $email;
    public $mobile;
    public $address;
    public $country;
    public $city;


    public $s_firstname;
    public $s_lastname;
    public $s_email;
    public $s_mobile;
    public $s_address;
    public $s_country;
    public $s_city;

    public function updated($fields)
    {
        $this->validate($fields,[
            'firstname'=> 'required',
            'lastname'=> 'required',
            'email'=> 'required|email',
            'mobile'=> 'required|numeric',
            'address'=> 'required',
            'country'=> 'required',
            'city'=> 'required'
        ]);



    }

    
 public function placeOrder()
 {
     $this->validate([
         'firstname'=> 'required',
         'lastname'=> 'required',
         'email'=> 'required|email',
         'mobile'=> 'required|numeric',
         'address'=> 'required',
         'country'=> 'required',
         'city'=> 'required'
     ]);

     
     $order = new Order();
     $order->user_id=Auth::user()->id;
     $order->subtotal = session()->get('checkout')['subtotal'];
     $order->discount = session()->get('checkout')['discount'];
     $order->total = session()->get('checkout')['total'];
     $order->firstname = $this->firstname;
     $order->lastname = $this->lastname;
     $order->email = $this->email;
     $order->mobile = $this->mobile;
     $order->address = $this->address;
     $order->country = $this->country;
     $order->city = $this->city;
     $order->status = 'ordered';
     $order->is_shipping_different = $this->ship_to_different ? 1:0;
     $order->save();

     foreach(Cart::instance('cart')->content() as $item)
     {
         $orderItem = new OrderItem();
         $orderItem->product_id = $item->id;
         $orderItem->order_id= $order->id;
         $orderItem->price= $$item->price;
         $orderItem->quantity= $item->qty;
         $orderItem->save();


     }
     if($this->ship_to_different)
     {
        $this->validate([
            's_firstname'=> 'required',
            's_lastname'=> 'required',
            's_email'=> 'required|email',
            's_mobile'=> 'required|numeric',
            's_address'=> 'required',
            's_country'=> 'required',
            's_city'=> 'required'
        ]); 
    $shipping = new Shipping();
    $shipping->order_id = $order->id;
     $shipping->s_firstname = $this->s_firstname;
     $shipping->s_lastname = $this->s_lastname;
     $shipping->s_email = $this->s_email;
     $shipping->s_mobile = $this->s_mobile;
     $shipping->s_address = $this->s_address;
     $shipping->s_country = $this->s_country;
     $shipping->s_city = $this->s_city;
     }

 }

    public function render()
    {
        return view('livewire.checkout-component')->layout('layouts.base');
    }
}
