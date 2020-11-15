<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
class CartController extends Controller
{
    public function index()
    {
        $id = auth()->user()->id;
        $cartdetails = Cart::all();
        return view('cart.index', compact('cartdetails'));
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        // dd($request);
        $request_data = $request->except(['_token']);
        $cart = Cart::create($request_data);
        session()->flash('success' , trans('site.add_successfully'));
        return redirect()->route('cart.index');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        session()->flash('success' , trans('site.deleted_successfully'));
        return redirect()->route('cart.index');

    }
}
