<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Department;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::paginate(5);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $departments = Department::all();
        $products = Product::all();
        return view('admin.products.create', compact('departments'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'offer' => 'sometimes',
            'start_offer' => 'sometimes|nullable|date',
            'end_offer' => 'sometimes|nullable|date',
            'photo' => 'sometimes',
        ],[],[
            'title' => trans('site.title'),
            'description' => trans('site.description'),
            'price' => trans('site.price'),
            'stock' => trans('site.stock'),
            'offer' => trans('site.offer'),
            'start_offer' => trans('site.start_offer'),
            'end_offer' => trans('site.end_offer'),
            'photo' => trans('site.photo'),
        ]);
            $request_data = $request->except(['_token','photo']);
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $ext = $file->getClientOriginalExtension();
                $filename = 'product_image'.'_'.time().'.'.$ext;
                $file->storeAs('public/images/products', $filename);
            }
            else {
                $filename = 'no-image.png';
            }
            $request_data['photo'] = $filename;
        $trademark = Product::create($request_data);
       session()->flash('success' , trans('site.add_successfully'));
        return redirect()->route('products.index');

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
        $country = Product::find($id);
        $country->delete();
        session()->flash('success' , trans('site.deleted_successfully'));
        return redirect()->route('products.index');

    }}
