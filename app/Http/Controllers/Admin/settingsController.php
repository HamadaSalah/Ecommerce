<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
class settingsController extends Controller
{
    public function edit() {
        $setting = Setting::find('1');
        return view('admin.settings', compact('setting'));
    }
    public function update(Request $request) {
     $this->validate(request(),
      [
        'name_ar' => 'required',
        'name_en' => 'required',
        'email' => 'required',
        'description' => 'required',
        'words' => 'required']
        ,[],
        [
            'name_ar' => trans('site.set_name_ar'),
            'name_en' =>  trans('site.set_name_en'),
            'email' =>  trans('site.email'),
            'description' =>  trans('site.set_desc'),
    
       ]);
       $request_data = $request->except(['_token','_method','logo','short_icon']);
    //    dd($request_data);
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $ext = $file->getClientOriginalExtension();
            $filename = 'mylogo.png';
            $file->storeAs('public/images/logo', $filename);
        }
        else {
            $filename = 'no-image.png';
        }

       $set = Setting::where('id','1')->update($request_data);
       session()->flash('success' , trans('site.updated_successfully'));
       return redirect()->route('admin.settings.edit');

    }
}
