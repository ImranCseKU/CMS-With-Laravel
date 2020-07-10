<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
   
    public function index()
    {
        $categories = Category::all();
        return view('category.index')->with('categories', $categories);
    }

   
    public function create()
    {
        return view('category.create');
    }

    
    public function store(CreateCategoryRequest $request)
    {
        
        // $category = new Category();
        // $category->name = $request->name;
        
        // $category->save();
        
        Category::create([
            'name'=> $request->name,
        ]);
        
        session()->flash('message', 'Category created successfully');

        return redirect()->route('categories.create');
        
    }


    public function show($id)
    {
        //
    }

    public function edit(Category $category)      //route model binding
    {
        //$category=Category::find($id);

        return view('category.create')->with('category', $category);
    }

    public function update(UpdateCategoryRequest $request, Category $category)  //apply route model binding
    {
        // $category->name = $request->name;
        // $category->save();

        // another way
        $category->update([
            "name"=> $request->name,
        ]);
        
        session()->flash('message', 'Category Updated Successfully');

        return redirect( route('categories.index') );
    }
 
    public function destroy(Category $category)
    {
        $category->delete();

        session()->flash('message','Category delete successfully');

        return redirect()->route('categories.index');
    }
}
