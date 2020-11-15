@extends('admin.master')
@section('content')
<h1 style="text-align: center;">@lang('site.add_new_city')</h1>
<form method="post" action="{{route('city.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="city_name_en">@lang('site.city_name_en')</label>
        <input name="city_name_en" type="mail" class="form-control" id="city_name_en" value="{{old('email')}}">
    </div>
    <div class="form-group">
        <label for="city_name_ar">@lang('site.city_name_ar')</label>
        <input name="city_name_ar" type="text" class="form-control" id="city_name_ar" aria-describedby="emailHelp" value="{{old('name')}}">
    </div>
    <select id='cntry_select' name="country_id">
        @foreach ($countries as $country)
            <option value="{{$country->id}}">{{$country->cuntry_name_ar}}</option>
        @endforeach
    </select>

    <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-city"> </i> @lang('site.add')</button>
</form>
  
@endsection