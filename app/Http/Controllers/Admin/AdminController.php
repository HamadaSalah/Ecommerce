<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\AdminDatatable;
use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function index(Request $request)
    {
        $uril = $request->query('level');
        if($uril != '') {
            $admins = DB::table('admins')->where('level', $uril)->get();
        }
        else {
            $admins = Admin::all();
        }
        return view('admin.admins.index', compact('admins'));
    }

    public function create()
    {
        return view('admin.admins.create');
    }
    public function store(Request $request)
    {
      $request->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'email',
            'password' => 'required|confirmed',
            'image' => 'image|mimes:jpeg,jpg,png,bmp|max:1999',
            'level' => 'required',
      ],[],[
        'name' => trans('site.name'),
        'email' => trans('site.email'),
        'password' => trans('site.password'),
        'image' => trans('site.image'),
        'level' => trans('site.level'),
      ]);
        $request_data = $request->except(['password', 'password_confirmation','image']);
        $request_data['password']= bcrypt($request->password);       
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = 'user_image'.'_'.time().'.'.$ext;
            $file->storeAs('public/images/users', $filename);
        }
        else {
            $filename = 'no-image.png';
        }
        $request_data['image'] = $filename;
        $admin = Admin::create($request_data);
       session()->flash('success' , trans('site.add_successfully'));
        return redirect()->route('admin.index');
             
    }


    public function show($id)
    {
       
    }

    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('admin.admins.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $old_admin = $admin = Admin::find($id);
        $request->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'email',
            'password' => 'required|confirmed',
            'image' => 'image|mimes:jpeg,jpg,png,bmp|max:1999',
        ],[],[
            'name' => trans('site.name'),
            'email' => trans('site.email'),
            'name' => trans('site.name'),
            'password' => trans('site.password'),
            'image' => trans('site.image'),
    
        ]);
            $request_data = $request->except(['password', 'password_confirmation','image', '_token','_method']);
            $request_data['password']= bcrypt($request->password);       
            if ($request->hasFile('image')) {
                $usersImage = public_path("storage/images/users/{$old_admin->image}"); // get previous image from folder
                if (File::exists($usersImage)) { // unlink or remove previous image from folder
                    unlink($usersImage);
                }
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = 'user_image'.'_'.time().'.'.$ext;
                $file->storeAs('public/images/users', $filename);
            }
            else {
                $filename = 'no-image.png';
            }
            $request_data['image'] = $filename;
            $admin = Admin::where('id',$id)->update($request_data);
        session()->flash('success' , trans('site.updated_successfully'));
        return redirect()->route('admin.index');

    }

    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        session()->flash('success' , trans('site.deleted_successfully'));
        return redirect()->route('admin.index');

    }
    public function useronly() {
        // $admin = Admin::where('level', 'User')->first();
        // dd($admin);
        return 'ddddddddddddddddd';
    }
}
