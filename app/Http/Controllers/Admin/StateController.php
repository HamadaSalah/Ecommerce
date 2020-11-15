<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\State;
use App\Country;
use App\City;
class StateController extends Controller
{
    public function index()
    {
        $states = State::all();
        $cities = City::all();
        
        return view('admin.states.index', compact('states'));
    }

    public function create()
    {
        $countries = Country::all();
        $cities = City::all();
        return view('admin.states.create', compact('countries', 'cities'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
            'country_id' => 'required',
            'city_id' => 'required',
        ],[],[
            'name_en' => trans('site.name_en'),
            'name_ar' => trans('site.name_ar'),
            'country_id' => trans('site.country'),
            'city_id' => trans('site.city'),
        ]);
        $request_data = $request->except(['_token']);
        $city = State::create($request_data);
        session()->flash('success' , trans('site.add_successfully'));
        return redirect()->route('state.index');

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
        $country = State::find($id);
        $country->delete();
        session()->flash('success' , trans('site.deleted_successfully'));
        return redirect()->route('state.index');

    }
}
