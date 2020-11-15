@extends('admin.master')

@section('content')
<h1 style="text-align: center">@lang('site.all_admins')</h1>
<table class="table table-striped">
    <thead style="background: rgb(28 219 5 / 60%);">
      <tr>
        <th scope="col">#</th>
        <th scope="col">@lang('site.name')</th>
        <th scope="col">@lang('site.email')</th>
        <th scope="col">@lang('site.role')</th>
        <th scope="col">@lang('site.image')</th>
        <th scope="col">@lang('site.action')</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($admins as $key => $admin)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$admin->name}}</td>
            <td>{{$admin->email}}</td>
            <td><button class="btn btn-success">{{$admin->level}}</button></td>
            <td>
              <a data-fancybox="gallery" href="{{asset('storage/images/users/'.$admin->image)}}"><img style="max-height: 80px" class="img-thumbnail" src="{{asset('storage/images/users/'.$admin->image)}}"></a>
            </td>
            <td>
              <a href="{{ route('admin.edit', $admin->id )}}"><button type="submit" class="btn btn-primary"/>@lang('site.edit')</button></a>
              <form style="display: inline-block" action="{{ route('admin.destroy', $admin->id )}}" method="POST">
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