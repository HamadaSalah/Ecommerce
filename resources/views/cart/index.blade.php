@extends('master')
@section('content')
<?php $total_price = 0 ?>
@if ($cartdetails->count() > 0)
@foreach ($cartdetails as $cartdetail)
<div class="history">
    <div class="container">
      <div class="row">
<div class="item_desc col-xs-12">
    <h1>Product id: {{$cartdetail->id}}</h1>
    <hr>
    <div class="item_show">
    <img src="{{asset('storage/images/products/'. $cartdetail->product->photo)}}">
        <p>{{$cartdetail->product->description}}</p>
    </div>
    <div class="quantity">
        <p>QTY : 1</p>
    </div>
    <div class="unit_price">
        <p>$ {{$cartdetail->product->price}}</p>
    </div>
    <div class="total_p">
        <p> {{$cartdetail->product->price}}</p>
       <?php $total_price+=$cartdetail->product->price ?>
    </div>
    <div class="remove">
    <h2>
        <form style="display: inline-block" action="{{ route('cart.destroy', $cartdetail->id )}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"/>@lang('site.delete')</button>
          </form>

    </h2>
    </div>
</div>
@endforeach
<div class="checkout">
    <h2>Check out</h2>
    <div class="stripe">
        <a href="{{route('stripe.index')}}"><i class="fab fa-cc-stripe"></i></a>
    </div>
    <div class="stripe" style="border: 0">
        <a href="{{route('stripe.paypal')}}"><i class="fab fa-cc-paypal"></i></a>
    </div>
    
</div>

      </div>
    </div>
</div>
@else
<h1 style="text-align: center;padding:30px;font-weight:bold">No Items To Show</h1>
@endif
@endsection







