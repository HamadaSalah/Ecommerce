@extends('admin.master')

@section('content')
<h1 style="text-align: center">@lang('site.all_cities')</h1>
<table class="table table-striped">
    <thead style="background: rgb(28 219 5 / 60%);">
      <tr>
        <th scope="col">#</th>
        <th scope="col">@lang('site.city_name_en')</th>
        <th scope="col">@lang('site.city_name_ar')</th>
        <th scope="col">@lang('site.country')</th>
        <th scope="col">@lang('site.delete')</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($cities as $key => $city)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$city->city_name_en}}</td>
            <td>{{$city->city_name_ar}}</td>
            <td>{{$city->country->cuntry_name_ar}}</td>
            <td>
            <form style="display: inline-block" action="{{ route('city.destroy', $city->id )}}" method="POST">
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