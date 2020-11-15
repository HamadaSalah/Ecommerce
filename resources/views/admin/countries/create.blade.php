@extends('admin.master')
@section('content')
<h1 style="text-align: center;">@lang('site.add_new_country')</h1>
<form method="post" action="{{route('country.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="cuntry_name_ar">@lang('site.country_name_ar')</label>
        <input name="cuntry_name_ar" type="mail" class="form-control" id="cuntry_name_ar" value="{{old('email')}}">
    </div>
    <div class="form-group">
        <label for="cuntry_name_en">@lang('site.country_name_en')</label>
        <input name="cuntry_name_en" type="text" class="form-control" id="cuntry_name_en" aria-describedby="emailHelp" value="{{old('name')}}">
    </div>

    <div class="form-group">
        <label for="code">@lang('site.country_code')</label>
        <input name="code" type="text" class="form-control" id="code" value="{{old('code')}}">
    </div>
    <div class="form-group">
        <label for="key">@lang('site.country_key')</label>
        <input name="key" type="text" class="form-control" id="key" value="{{old('key')}}">
    </div>
    <div class="form-group">
        <label for="logo">@lang('site.country_logo')</label>
        <input name="logo" type="file" class="form-control" id="logo" style="padding: 3px">
    </div>
    <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-user-plus"> </i> @lang('site.add')</button>
</form>
  
@endsection