@extends('admin.master')
@section('content')
<h1 style="text-align: center;">@lang('site.add_new_trademark')</h1>
<form method="post" action="{{route('trademark.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="trademark_name_en">@lang('site.trademark_name_en')</label>
        <input name="name_en" type="mail" class="form-control" id="trademark_name_en" value="{{old('email')}}">
    </div>
    <div class="form-group">
        <label for="trademark_name_ar">@lang('site.trademark_name_ar')</label>
        <input name="name_ar" type="text" class="form-control" id="trademark_name_ar" aria-describedby="emailHelp" value="{{old('name')}}">
    </div>
    <div class="form-group">
        <label for="file_image">@lang('site.select_image')</label>
        <input name="logo" type="file" class="form-control" id="file_image" style="padding: 3px">
    </div>

    <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-trademark"> </i> @lang('site.add')</button>
</form>
  
@endsection