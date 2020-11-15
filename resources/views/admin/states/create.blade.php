@extends('admin.master')
@section('content')
<h1 style="text-align: center;">@lang('site.add_new_state')</h1>
<form method="post" action="{{route('state.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="state_name_en">@lang('site.state_name_en')</label>
        <input name="name_en" type="mail" class="form-control" id="state_name_en" value="{{old('email')}}">
    </div>
    <div class="form-group">
        <label for="state_name_ar">@lang('site.state_name_ar')</label>
        <input name="name_ar" type="text" class="form-control" id="state_name_ar" aria-describedby="emailHelp" value="{{old('name')}}">
    </div>
    <select id='cntry_select' name="country_id">
        <option value="" disabled selected>@lang('site.select_your_country')</option>
        @foreach ($countries as $country)
            <option value="{{$country->id}}">{{$country->cuntry_name_ar}}</option>
        @endforeach
    </select>
    <select id='cntry_select' name="city_id">
        <option value="" disabled selected>@lang('site.select_your_city')</option>
        @foreach ($cities as $city)
            <option value="{{$city->id}}">{{$city->city_name_ar}}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-state"> </i> @lang('site.add')</button>
</form>
  
@endsection