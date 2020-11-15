<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Manufact;

class ManufactsController extends Controller
{
    public function index()
    {
        $manufacts = Manufact::all();
        return view('admin.manufacts.index', compact('manufacts'));
    }

    public function create()
    {
        
        $manufacts = Manufact::all();
        return view('admin.manufacts.create', compact('manufacts'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
            'mobile' => 'sometimes|nullable',
            'email' => 'sometimes|nullable|email',
            'address' => 'sometimes|nullable',
            'facebook' => 'sometimes|nullable|url',
            'twitter' => 'sometimes|nullable|url',
            'website' => 'sometimes|nullable|url',
            'logo' => 'sometimes|nullable',
        ],[],[
            'name_en' => trans('site.name_ar'),
            'name_ar' => trans('site.name_en'),

        ]);
            $request_data = $request->except(['_token','logo']);
            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $ext = $file->getClientOriginalExtension();
                $filename = 'factory_image'.'_'.time().'.'.$ext;
                $file->storeAs('public/images/manufactors', $filename);
            }
            else {
                $filename = 'no-image.png';
            }
            $request_data['logo'] = $filename;
        $manufact = Manufact::create($request_data);
       session()->flash('success' , trans('site.add_successfully'));
        return redirect()->route('manufact.index');

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
        $manufact = Manufact::find($id);
        $manufact->delete();
        session()->flash('success' , trans('site.deleted_successfully'));
        return redirect()->route('trademark.index');

    }
}
