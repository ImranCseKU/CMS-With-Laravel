<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\CreateCategoryRequest;

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
        //
    }
}
