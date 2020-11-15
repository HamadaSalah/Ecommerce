@extends('admin.master')
@section('content')
<h1 style="text-align: center;">@lang('site.settings')</h1>
<form method="post" action="{{route('admin.settings.update')}}" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="form-group">
        <label for="name_ar">@lang('site.set_name_ar')</label>
        <input name="name_ar" type="text" class="form-control" id="name_ar" aria-describedby="emailHelp" value="{{$setting->name_ar}}">
    </div>
    <div class="form-group">
        <label for="name_en">@lang('site.set_name_en')</label>
        <input name="name_en" type="text" class="form-control" id="name_en" aria-describedby="emailHelp" value="{{$setting->name_en}}">
    </div>
    <div class="form-group">
        <label for="email">@lang('site.set_email')</label>
        <input name="email" type="text" class="form-control" id="email" aria-describedby="emailHelp" value="{{$setting->email}}">
    </div>
    <div class="form-group">
        <label for="logo">@lang('site.set_select_logo')</label>
        <input name="logo" type="file" class="form-control" id="logo" style="padding: 3px">
    </div>
    <div class="form-group">
        <label for="short_icon">@lang('site.set_select_short_icon')</label>
        <input name="short_icon" type="file" class="form-control" id="short_icon" style="padding: 3px">
    </div>
    <div class="form-group">
        <label for="description">@lang('site.set_desc')</label>
        <input name="description" type="text" class="form-control" id="description" aria-describedby="emailHelp" value="{{$setting->description}}">
    </div>
    <div class="form-group">
        <label for="words">@lang('site.set_desc')</label>
        <input name="words" type="text" class="form-control" id="words" aria-describedby="emailHelp" value="{{$setting->words}}">
    </div>
    <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-tools"> </i> @lang('site.edit')</button>
</form>
  
@endsection