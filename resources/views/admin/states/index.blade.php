@extends('admin.master')

@section('content')
<h1 style="text-align: center">@lang('site.all_states')</h1>
<table class="table table-striped">
    <thead style="background: rgb(28 219 5 / 60%);">
      <tr>
        <th scope="col">#</th>
        <th scope="col">@lang('site.state_name_en')</th>
        <th scope="col">@lang('site.state_name_ar')</th>
        <th scope="col">@lang('site.country')</th>
        <th scope="col">@lang('site.city')</th>
        <th scope="col">@lang('site.delete')</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($states as $key => $state)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$state->name_en}}</td>
            <td>{{$state->name_ar}}</td>
            <td>{{$state->country->cuntry_name_ar}}</td>
            <td>{{$state->city->city_name_ar}}</td>
            <td>
            <form style="display: inline-block" action="{{ route('state.destroy', $state->id )}}" method="POST">
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