<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;

class ShopComponent extends Component
{
    public $sorting;
    public $pagesize;

    public function mount()
    {

        $this->sorting = "Defulat";
        $this->pagesize = 12;

    }

    public function store($product_id,$product_name,$product_price)
    {
        $Cart=Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in Cart');
        
        // dd($Cart);b
        return redirect()->route('product.cart');
    }
    use WithPagination;
    public function render()
    {
        if($this->sorting=="date")
        {
            $products = Product::orderBy('created_at','DESC')->paginate($this->pagesize);
        }
        elseif($this->sorting=="price")
        {
            $products = Product::orderby('regular_price','ASC')->paginate($this->pagesize);
        }

        elseif($this->sorting=="price-desc")
        {
            $products = Product::orderby('regular_price','DESC')->paginate($this->pagesize);
        }
        else{
            $products = Product::paginate($this->pagesize);
        }
        $products = Product::paginate(12);
        return view('livewire.search-component',['products'=> $products])->layout('layouts.base');
    }
    
}
