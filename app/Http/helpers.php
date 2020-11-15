<?php
if (!function_exists('active_menu')) {
    function active_menu ($link) {
    if (preg_match('/'.$link.'/', Request::segment(3))) {
        return 'menu-is-opening menu-open';
            } else {
                return '';
            }
    }
} 
if (!function_exists('countries_list')) {
    function countries_list() {
        $cs = App\Country::all();
        dd(var_dump($cs));
        foreach($cs as $key => $c)
        {
           dd($c->id);
        }
       
    }
}
if (!function_exists('settings')) {
    function settings($myset) {
        $sets = App\Setting::all();
        foreach($sets as $set) 
        {
            return $set->$myset;
        }
    }
}
if (!function_exists('language')) {
    function language() {
        return LaravelLocalization::getCurrentLocale();
    }
}
if (!function_exists('users')) {
    function users() {
        return App\Admin::all()->count();
    }
}
if (!function_exists('products')) {
    function products() {
        return App\Product::all()->count();
    }
}
if (!function_exists('countries')) {
    function countries() {
        return App\Country::all()->count();
    }
}
if (!function_exists('manufact')) {
    function manufact() {
        return App\Manufact::all()->count();
    }
}
if (!function_exists('Admin_img')) {
    function Admin_img() {
        $photo = auth()->guard('admin')->user()->image;
        return $photo;
    }
}
if (!function_exists('departments')) {
    function departments($myset) {
        $departments = App\Manufact::all();
        foreach($departments as $department) 
        {
            return $departments->$myset;
        }

    }
}
if (!function_exists('cart')) {
    function cart() {
        return App\Cart::where('user_id', auth()->user()->id)->count();
    }
}
// if (!function_exists('cartvalue')) {
//     function cartvalue() {
//         return App\Cart::select()->where('user_id', auth()->user()->id)->get();
//     }
// }


?>