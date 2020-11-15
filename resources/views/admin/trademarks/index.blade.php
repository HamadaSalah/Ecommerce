@extends('admin.master')

@section('content')
<h1 style="text-align: center">@lang('site.all_trademarks')</h1>
<table class="table table-striped">
    <thead style="background: rgb(28 219 5 / 60%);">
      <tr>
        <th scope="col">#</th>
        <th scope="col">@lang('site.trademarks_name_en')</th>
        <th scope="col">@lang('site.trademarks_name_ar')</th>
        <th scope="col">@lang('site.trademarks_logo')</th>
        <th scope="col">@lang('site.delete')</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($trademarks as $key => $trademark)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$trademark->name_en}}</td>
            <td>{{$trademark->name_ar}}</td>
            <td>
              <a data-fancybox="gallery" href="{{asset('storage/images/brands/'.$trademark->logo)}}"><img style="max-height: 80px" class="img-thumbnail" src="{{asset('storage/images/brands/'.$trademark->logo)}}"></a>
            </td>
            <td>
            <form style="display: inline-block" action="{{ route('trademark.destroy', $trademark->id )}}" method="POST">
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