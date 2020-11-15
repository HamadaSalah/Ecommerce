@extends('admin.master')
@section('content')
<h1 style="text-align: center;">Update Admin</h1>
<form method="post" action="{{route('admin.update', $admin->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">@lang('site.name')</label>
        <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp" value="{{$admin->name}}">
    </div>
    <div class="form-group">
        <label for="email">@lang('site.email')</label>
        <input name="email" type="mail" class="form-control" id="email" placeholder="Password" value="{{$admin->email}}">
    </div>
    <div class="form-group">
        <label for="password">@lang('site.password')</label>
    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="password_confirmation">@lang('site.re_password')</label>
        <input name="password_confirmation" type="password" class="form-control" id="email" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="file_image">@lang('site.select_image')</label>
        <input name="image" type="file" class="form-control" id="file_image" style="padding: 3px">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect2">Example multiple select</label>
        <select name="level" multiple class="form-control" id="exampleFormControlSelect2">
          <option value="User">User</option>
          <option value="Vendor">Vendor</option>
          <option value="Company">Company</option>
        </select>
      </div>    
    <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-user-edit"> </i> @lang('site.edit')</button>
</form>
  
@endsection