@extends('admin.master')

@section('content')
<h1 style="text-align: center">@lang('site.all_countries')</h1>
<table class="table table-striped">
    <thead style="background: rgb(28 219 5 / 60%);">
      <tr>
        <th scope="col">#</th>
        <th scope="col">@lang('site.country_name_en')</th>
        <th scope="col">@lang('site.country_name_ar')</th>
        <th scope="col">@lang('site.country_code')</th>
        <th scope="col">@lang('site.country_key')</th>
        <th scope="col">@lang('site.country_logo')</th>
        <th scope="col">@lang('site.action')</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($countries as $key => $country)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$country->cuntry_name_en}}</td>
            <td>{{$country->cuntry_name_ar}}</td>
            <td>{{$country->code}}</td>
            <td>{{$country->key}}</td>
            <td>
              <a data-fancybox="gallery" href="{{asset('storage/images/country/'.$country->logo)}}"><img style="max-height: 40px" class="img-thumbnail" src="{{asset('storage/images/country/'.$country->logo)}}"></a>
            </td>
            <td>
              <form style="display: inline-block" action="{{ route('country.destroy', $country->id )}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"/>@lang('site.delete')</button>
              </form>
  
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection