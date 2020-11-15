<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Department;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index(Request $request)
    {
        $uril = $request->query('department');
        if($uril != '') {
            $products = Product::where('department_id', $uril)->paginate(4);
        }
        else {
            $products = Product::paginate(4);
        }
        $departments = Department::all();
        return view('index', ['products' => $products,'departments' => $departments]);
    }
}
