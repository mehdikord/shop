<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function store(Request $request)
    {
        $request->merge(['name'=>str_replace(' ','-',$request->name)]);
        $this->validate($request,[
            'name'=>'required|unique:categories',
            'parent_id'=>'nullable|exists:categories,id',
        ]);
        $path=null;
        if ($request->hasFile('icon')){
            $path = Storage::put('public/images/categories',$request->file('icon'));
        }
        Category::create([
            'parent_id'=>$request->parent_id,
            'name'=>$request->name,
            'icon'=>$path,
        ]);
        return back()->with(panel_alert());
    }
}
