<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\City;
use App\Country;
class CitiesController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('admin.cities.index', compact('cities'));
    }

    public function create()
    {
        $countries = Country::all();
        return view('admin.cities.create', compact('countries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'city_name_en' => 'required',
            'city_name_ar' => 'required',
            'country_id' => 'required',
        ],[],[
            'city_name_en' => trans('site.city_name_en'),
            'city_name_ar' => trans('site.city_name_ar'),
            'country_id' => trans('site.country_id'),
        ]);
        $request_data = $request->except(['_token']);
        $city = City::create($request_data);
        session()->flash('success' , trans('site.add_successfully'));
        return redirect()->route('city.index');

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
        $city = City::find($id);
        $city->delete();
        session()->flash('success' , trans('site.deleted_successfully'));
        return redirect()->route('city.index');

    }
}
