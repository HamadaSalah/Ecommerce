<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Department;
class DepartmentsController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('admin.departments.index', compact('departments'));
    }

    public function create()
    {
        
        $departments = Department::all();
        return view('admin.departments.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'department_name_en' => 'required',
            'department_name_ar' => 'required',
            'description' => 'nullable',
            'parent' => 'nullable',
        ],[],[
            'department_name_en' => trans('site.department_name_en'),
            'department_name_ar' => trans('site.department_name_ar'),
            'description' => trans('site.description'),
            'parent' => trans('site.parent'),
        ]);
        $request_data = $request->except(['_token']);
        $department = Department::create($request_data);
       session()->flash('success' , trans('site.add_successfully'));
        return redirect()->route('department.index');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $country = Department::find($id);
        $country->delete();
        session()->flash('success' , trans('site.deleted_successfully'));
        return redirect()->route('department.index');

    }
}
