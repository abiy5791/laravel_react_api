<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function index(Category $category)
    {
        return $category->subcategories;
    }

    public function store(Request $request, Category $category)
    {
        $subcategory = $category->subcategories()->create($request->all());
        return response()->json($subcategory, 201);
    }

    public function show(Category $category, Subcategory $subcategory)
    {
        return $subcategory;
    }

    public function update(Request $request, Category $category, Subcategory $subcategory)
    {
        $subcategory->update($request->all());
        return response()->json($subcategory, 200);
    }

    public function destroy(Category $category, Subcategory $subcategory)
    {
        $subcategory->delete();
        return response()->json(null, 204);
    }
}