<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Country;

class CountriesController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('admin.countries.index', compact('countries'));
    }

    public function create()
    {
        return view('admin.countries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cuntry_name_en' => 'required',
            'cuntry_name_ar' => 'required',
            'code' => 'required',
            'key' => 'required',
            'logo' => 'image|mimes:jpeg,jpg,png,bmp|max:1999',
        ],[],[
            'cuntry_name_en' =>trans('site.country_name_en'),
            'cuntry_name_ar' =>trans('site.country_name_ar'),
            'code' =>trans('site.country_code'),
            'key' =>trans('site.country_key'),
            'logo' =>trans('site.country_logo'),
        ]);
        $request_data = $request->except(['logo']);
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $ext = $file->getClientOriginalExtension();
            $filename = 'country'.'_'.time().'.'.$ext;
            $file->storeAs('public/images/country', $filename);
        }
        else {
            $filename = 'no-logo.png';
        }
        $request_data['logo'] = $filename;
        $country = Country::create($request_data);
       session()->flash('success' , trans('site.add_successfully'));
        return redirect()->route('country.index');

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
        $country = Country::find($id);
        $country->delete();
        session()->flash('success' , trans('site.deleted_successfully'));
        return redirect()->route('country.index');

    }
}
