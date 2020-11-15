<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Shipping;
class ShippingController extends Controller
{
    public function index()
    {
        $shippings = Shipping::all();
        return view('admin.shippings.index', compact('shippings'));
    }

    public function create()
    {
        
        $shippings = Shipping::all();
        return view('admin.shippings.create', compact('shippings'));
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
            'name_en' => trans('site.name_en'),
            'name_ar' => trans('site.name_ar'),
 
        ]);
            $request_data = $request->except(['_token','logo']);
            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $ext = $file->getClientOriginalExtension();
                $filename = 'shippings'.'_'.time().'.'.$ext;
                $file->storeAs('public/images/shippings/', $filename);
            }
            else {
                $filename = 'no-image.png';
            }
            $request_data['logo'] = $filename;
        $shipping = Shipping::create($request_data);
       session()->flash('success' , trans('site.add_successfully'));
        return redirect()->route('shippings.index');

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
        $shipping = Shipping::find($id);
        $shipping->delete();
        session()->flash('success' , trans('site.deleted_successfully'));
        return redirect()->route('shippings.index');

    }
}
