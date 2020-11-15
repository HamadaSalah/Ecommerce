@extends('master')
@section('content')

<div class="hunting">
    <div class="container">
      <div class="row">
        <p>All Products</p>
        <div class="dropdown mydropdown">
          <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Select Your Category
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="{{route('home')}}"> All Categories</a></li>

            @foreach ($departments as $department)
              <li><a href="{{route('home').'?department='.$department->id}}">{{$department->department_name_en}}</a></li>
            @endforeach
            
          </ul>
        </div>
        
        <div class="clearfix"></div>
        @foreach ($products as $product)
          <div class="per_item col-md-3 col-sm-6">
            <div class="item_b">
              <div class="img_border" style="min-height: 250px">
                <img src="{{asset('storage/images/products/'.$product->photo)}}">
              </div>
              <h1>{{$product->price}}<br/><span>Ex Tax: $10.95</span></h1>
              <h3>{{$product->title}}</h3>
              <img src="{{asset('storage/images/products/top_sale.png')}}" id="top_s">
            <form action="{{route('cart.store')}}" method="POST">
              @csrf
              <input type="text" hidden value="{{$product->id}}" name="product_id">
              <input type="text" hidden value="{{auth()->user()->id}}" name="user_id">
              <button class="btn" style="color:#fff;background: #7da350;float:none">Add To Cart</button>
              </form>
            </div>
          </div>
        @endforeach
        {{ $products->links() }}
      </div>
    </div>
  </div>

@endsection







