@extends('admin.master')

@section('content')
<h1 style="text-align: center">@lang('site.all_departments')</h1>
<table class="table table-striped">
    <thead style="background: rgb(28 219 5 / 60%);">
      <tr>
        <th scope="col">#</th>
        <th scope="col">@lang('site.department_name_en')</th>
        <th scope="col">@lang('site.department_name_ar')</th>
        <th scope="col">@lang('site.department_super')</th>
        <th scope="col">@lang('site.delete')</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($departments as $key => $department)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$department->department_name_en}}</td>
            <td>{{$department->department_name_ar}}</td>
            <td>
              @foreach ($department->children as $dep)
                  {{$dep['department_name_ar']}}
              @endforeach
            </td>
            <td>
            <form style="display: inline-block" action="{{ route('department.destroy', $department->id )}}" method="POST">
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