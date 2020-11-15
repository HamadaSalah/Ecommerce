@extends('admin.master')
@section('content')
<h1 style="text-align: center;">@lang('site.add_new_product')</h1>
<form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="product_title">@lang('site.title')</label>
        <input name="title" type="text" class="form-control" id="product_title" value="{{old('title')}}">
    </div>
    <div class="form-group">
        <label for="description">@lang('site.description')</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label for="price">@lang('site.price')</label>
        <input name="price" type="text" class="form-control" id="price" value="{{old('price')}}">
    </div>
    <div class="form-group">
        <label for="stock">@lang('site.stock')</label>
        <input name="stock" type="text" class="form-control" id="stock" value="{{old('stock')}}">
    </div>
    <div class="form-group">
        <label for="offer">@lang('site.offer')</label>
        <input name="offer" type="number" class="form-control" id="offer" value="{{old('offer')}}">
    </div>
    <div class="form-group">
        <label for="start_offer">@lang('site.start_offer')</label>
        <input name="start_offer" type="date" class="form-control" id="start_offer" value="{{old('start_offer')}}">
    </div>
    <div class="form-group">
        <label for="end_offer">@lang('site.end_offer')</label>
        <input name="end_offer" type="date" class="form-control" id="end_offer" value="{{old('end_offer')}}">
    </div>
    <div class="form-group">
        <label for="file_image">@lang('site.select_image')</label>
        <input name="photo" type="file" class="form-control" id="file_image" style="padding: 3px">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect2">@lang('site.role')</label>
        <select name="department_id" multiple class="form-control" id="exampleFormControlSelect2">
            @foreach ($departments as $department)
            <option value="{{$department->id}}">{{$department->department_name_en}}</option>
            @endforeach
          
        </select>
      </div>    

    <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-plus"> </i> @lang('site.add')</button>
</form>
  
@endsection