@extends('admin.master')

@section('content')
<h1 style="text-align: center">@lang('site.all_manufactors')</h1>
<table class="table table-striped">
    <thead style="background: rgb(28 219 5 / 60%);">
      <tr>
        <th scope="col">#</th>
        <th scope="col">@lang('site.name_en')</th>
        <th scope="col">@lang('site.name_ar')</th>
        <th scope="col">@lang('site.mobile')</th>
        <th scope="col">@lang('site.facebook')</th>
        <th scope="col">@lang('site.twitter')</th>
        <th scope="col">@lang('site.website')</th>
        <th scope="col">@lang('site.logo')</th>
        <th scope="col">@lang('site.action')</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($manufacts as $key => $manufact)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$manufact->name_en}}</td>
            <td>{{$manufact->name_ar}}</td>
            <td>{{$manufact->mobile}}</td>
            <td><a target="_blank" href="{{$manufact->facebook}}"><i class="nav-icon socialized fab fa-facebook"> </i> </a></td>
            <td><a target="_blank" href="{{$manufact->twitter}}"><i class="nav-icon socialized fab fa-twitter"> </i> </a></td>
            <td><a target="_blank" href="{{$manufact->website}}"><i class="nav-icon socialized fas fa-globe-europe"></i> </a></td>
            <td>
              <a data-fancybox="gallery" href="{{asset('storage/images/manufactors/'. $manufact->logos)}}"><img style="max-height: 50px" class="img-thumbnail" src="{{asset('storage/images/brands/'.$manufact->logo)}}"></a>
            </td>
            <td>
            <form style="display: inline-block" action="{{ route('manufact.destroy', $manufact->id )}}" method="POST">
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