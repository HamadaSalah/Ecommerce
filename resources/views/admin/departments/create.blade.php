@extends('admin.master')
@section('content')
<h1 style="text-align: center;">@lang('site.add_new_department')</h1>
<form method="post" action="{{route('department.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="department_name_en">@lang('site.department_name_en')</label>
        <input name="department_name_en" type="mail" class="form-control" id="department_name_en" value="{{old('email')}}">
    </div>
    <div class="form-group">
        <label for="department_name_ar">@lang('site.department_name_ar')</label>
        <input name="department_name_ar" type="text" class="form-control" id="department_name_ar" aria-describedby="emailHelp" value="{{old('name')}}">
    </div>
    <select id='cntry_select' name="parent">
        <option value="" disabled selected>@lang('site.select_your_departmnet')</option>
        @foreach ($departments as $department)
            <option value="{{$department->id}}">{{$department->department_name_ar}}</option>
        @endforeach
    </select>

    <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-department"> </i> @lang('site.add')</button>
</form>
  
@endsection