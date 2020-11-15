@extends('admin.master')

@section('content')
<h1 style="text-align: center">@lang('site.all_products')</h1>
<div class="table_row" style="display: block;width:100%;clear:both">
<table class="table table-striped">
    <thead style="background: rgb(28 219 5 / 60%);">
      <tr>
        <th scope="col">#</th>
        <th scope="col">@lang('site.title')</th>
        <th scope="col">@lang('site.description')</th>
        <th scope="col">@lang('site.price')</th>
        <th scope="col">@lang('site.stock')</th>
        <th scope="col">@lang('site.image')</th>
        <th scope="col">@lang('site.action')</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $key => $product)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$product->title}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->stock}}</td>
            <td>
              <a data-fancybox="gallery" href="{{asset('storage/images/products/'. $product->photo)}}"><img style="max-height: 50px" class="img-thumbnail" src="{{asset('storage/images/products/'.$product->photo)}}"></a>
            </td>
            <td>
            <form style="display: inline-block" action="{{ route('products.destroy', $product->id )}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"/>@lang('site.delete')</button>
            </form>
            </td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>
<div class="table_row" style="display: block;width:100%;clear:both">
  {{ $products->links() }}
</div>
@endsection