<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // For Manage Category View
    public function index()
    {
        return view('backend.pages.category.manage-category');
    }

    // For 
    public function create()
    {
        //
    }

    // For Adding Category In Database
    public function store(Request $request)
    {
        $category = new Category();

        $category->name = $request->name;
        $category->description = $request->description;
        $category->status = $request->status;

        $category->save();
        return response()->json([
            "msg"=>"Category Inserted Successfully."
        ]);
    }

    // For Showing All Categories In View Page
    public function show()
    {
        $categories = Category::all();
        
        return response()->json([
            "allData" => $categories
        ]);
    }

    // For 
    public function edit($id)
    {
        $category = Category::find($id);

        return response()->json([
            "cateData" => $category
        ]);
    }

    // For 
    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        $category->name = $request->name;
        $category->description = $request->description;
        $category->status = $request->status;

        $category->update();
        return response()->json([
            "msg"=>"Category Updated Successfully."
        ]);
    }

    // For 
    public function destroy($id)
    {
        $category = Category::find($id);

        $category->delete();

        return response()->json([
            "msg" => "Category Deleted Successfully."
        ]);
    }
}
