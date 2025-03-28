<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Manual;

class HomePageController extends Controller
{
    public function homepage(){
        $brands = Brand::all()->sortBy('name');
        $top10 = Manual::orderByDesc('timesVisited')->limit(10)->get();
        return view('pages.homepage', compact('brands'), compact('top10'));
    }
}
