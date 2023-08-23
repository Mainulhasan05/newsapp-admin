<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CategoryRequestForm;

class CategoryController extends Controller
{
    public function index(){
        $category=Category::all();
        return view('category',compact('category'));
    }

    public function create(){
        return view('create-category');
    }
    public function store(CategoryRequestForm $request){
        $data=$request->validated();
        $category=new Category();

        $category->name=$data['name'];
        $category->slug=$data['slug'];
        $category->description=$data['description'];
        
        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/category/',$filename);
            $category->image=$filename;
        }

        $category->meta_title=$data['meta_title'];
        $category->meta_description=$data['meta_description'];
        $category->meta_keyword=$request->meta_keywords;

        $category->navbar_status=$data['navbar_status'];
        $category->status=$data['status'];
        $category->created_by=Auth::user()->id;

        $category->save();

        return redirect('/category')->with('message','Category Addes Successfully');
    }
}
