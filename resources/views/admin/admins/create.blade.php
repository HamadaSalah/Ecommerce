@extends('admin.master')
@section('content')
<h1 style="text-align: center;">@lang('site.add_new_admin')</h1>
<form method="post" action="{{route('admin.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">@lang('site.name')</label>
        <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp" value="{{old('name')}}">
    </div>
    <div class="form-group">
        <label for="email">@lang('site.email')</label>
        <input name="email" type="mail" class="form-control" id="email"value="{{old('email')}}">
    </div>
    <div class="form-group">
        <label for="password">@lang('site.password')</label>
        <input name="password" type="password" class="form-control" id="password" >
    </div>
    <div class="form-group">
        <label for="password_confirmation">@lang('site.re_password')</label>
        <input name="password_confirmation" type="password" class="form-control" id="email">
    </div>
    <div class="form-group">
        <label for="file_image">@lang('site.select_image')</label>
        <input name="image" type="file" class="form-control" id="file_image" style="padding: 3px">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect2">@lang('site.role')</label>
        <select name="level" multiple class="form-control" id="exampleFormControlSelect2">
          <option value="User">@lang('site.User')</option>
          <option value="Vendor">@lang('site.Vendor')</option>
          <option value="Company">@lang('site.Company')</option>
        </select>
      </div>    
    <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-user-plus"> </i> @lang('site.add')</button>
</form>
  
@endsection