<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $data = Category::query();
        $items = $data->orderByDesc('id')->paginate(20)->appends(\request()->except('page'));
        $title = "دسته بندی ها";
        $subtitle = "لیست همه دسته بندی ها";
        $categories = Category::all();
        return view('panel.categories.index',compact('title','subtitle','categories'));
    }
}
