<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public $category;
    public function index(){
        return view('admin.category.show',[
            'categories'=> Category::latest()->get(),
        ]);
    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(Request $request){
        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name,'-');
        $category->save();
        return redirect()->back()->with('success', 'Category Created Successfully');

    }
    public function edit($id){
        return view('admin.category.edit',[
            'category'=>Category::find($id),
        ]);
    }
    public function update(Request $request){
        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name,'-');
        $category->save();
        return redirect()->back()->with('success', 'Category Updated Successfully');

    }
    
    public function delete($id)
    {
        $category = Category::find($id);
        
        // Check if category exists
        if (!$category) {
            return redirect()->back()->with('error', 'Category not found');
        }
        
        // Check if trying to delete "Uncategorized"
        if ($category->name === 'Uncategorized') {
            abort(404);
        }
        
        // Get default category (Uncategorized)
        $defaultCategory = Category::where('name', 'Uncategorized')->first();
        
        if (!$defaultCategory) {
            return redirect()->back()->with('error', 'Default category not found');
        }
        
        // Update posts to default category
        $category->posts()->update(['category_id' => $defaultCategory->id]);
        
        // Delete the category
        $category->delete();
        
        return redirect()->back()->with('success', 'Category has been deleted.');
    }




}
