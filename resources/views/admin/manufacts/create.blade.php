@extends('admin.master')
@section('content')
@push('javascript')
<script type="text/javascript" src="{{url('/design/adminlte/dist/js/locationpicker.jquery.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwllTfPoqdBhij655vhY5MZ9PGz6bds38&callback=initMap"
  type="text/javascript"></script><script>
    $('#us3').locationpicker({
        location: {
            latitude: 46.15242437752303,
            longitude: 2.7470703125
        },
        radius: 300,
        inputBinding: {
            latitudeInput: $('#lat'),
            longitudeInput: $('#lng')
        },
        enableAutocomplete: true,
        onchanged: function (currentLocation, radius, isMarkerDropped) {
            // Uncomment line below to show alert on each Location Changed event
            //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
        }
    });
</script>

@endpush
<h1 style="text-align: center;">@lang('site.add_new_factory')</h1>
<form method="post" action="{{route('manufact.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="trademark_name_en">@lang('site.name_en')</label>
        <input name="name_en" type="text" class="form-control" id="trademark_name_en" value="{{old('name_en')}}">
    </div>
    <div class="form-group">
        <label for="trademark_name_ar">@lang('site.name_ar')</label>
        <input name="name_ar" type="text" class="form-control" id="mobile" value="{{old('name_ar')}}">
    </div>
    <div class="form-group">
        <label for="mobile">@lang('site.mobile')</label>
        <input name="mobile" type="text" class="form-control" id="trademark_name_ar" value="{{old('mobile')}}">
    </div>
    <div class="form-group">
        <label for="email">@lang('site.email')</label>
        <input name="email" type="email" class="form-control" id="email" value="{{old('email')}}">
    </div>
    <div class="form-group">
        <label for="address">@lang('site.address')</label>
        <input name="address" type="text" class="form-control" id="address" value="{{old('name_ar')}}">
    </div>
    <div class="form-group">
        <label for="facebook">@lang('site.facebook')</label>
        <input name="facebook" type="text" class="form-control" id="facebook" aria-describedby="emailHelp" value="{{old('facebook')}}">
    </div>
    <div class="form-group">
        <label for="twitter">@lang('site.twitter')</label>
        <input name="twitter" type="text" class="form-control" id="twitter" aria-describedby="emailHelp" value="{{old('twitter')}}">
    </div>
    <div class="form-group">
        <label for="website">@lang('site.website')</label>
        <input name="website" type="text" class="form-control" id="website" aria-describedby="emailHelp" value="{{old('website')}}">
    </div>
    <div class="form-group">
        <div id="us3" style="width: 500px; height: 400px;"></div>
    </div>
    <div class="form-group">
        <label for="file_image">@lang('site.select_image')</label>
        <input name="logo" type="file" class="form-control" id="file_image" style="padding: 3px">
    </div>

    <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-plus"> </i> @lang('site.add')</button>
</form>
  
@endsection