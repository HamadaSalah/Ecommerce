<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TradeMark;

class TradeMarkController extends Controller
{
    public function index()
    {
        $trademarks = TradeMark::all();
        return view('admin.trademarks.index', compact('trademarks'));
    }

    public function create()
    {
        
        $trademarks = TradeMark::all();
        return view('admin.trademarks.create', compact('trademarks'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
            ]);
            $request_data = $request->except(['_token','logo']);
            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $ext = $file->getClientOriginalExtension();
                $filename = 'mark_image'.'_'.time().'.'.$ext;
                $file->storeAs('public/images/brands', $filename);
            }
            else {
                $filename = 'no-image.png';
            }
            $request_data['logo'] = $filename;
        $trademark = TradeMark::create($request_data);
       session()->flash('success' , trans('site.add_successfully'));
        return redirect()->route('trademark.index');

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
        $country = TradeMark::find($id);
        $country->delete();
        session()->flash('success' , trans('site.deleted_successfully'));
        return redirect()->route('trademark.index');

    }
}
