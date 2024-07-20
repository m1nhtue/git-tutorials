<?php

namespace App\Http\Controllers\Admin;


use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use App\Http\Requests\UpdateCategoryRequest;
Paginator::useBootstrap();

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(5);
        return view('admin.Post.category',compact('categories'));
    }

    public function create()
    {
        return view('admin.Post.create_category');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories,name'
        ],[
            'name.required' => 'Tên thể loại không được bỏ trống',
            'name.unique' => 'Tên thể loại đã có trong hệ thống'
        ]);
        try {
            Category::create($request->all());
            return redirect()->route('admin.category.index')->with('ok','Thêm mới thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('no','Thêm mới thất bại');
        }
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('admin.Post.edit_category',compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories,name,'.$category->id
        ],[
            'name.required' => 'Tên thể loại không được bỏ trống',
            'name.unique' => 'Tên thể loại đã có trong hệ thống'
        ]);
        try {
            $category->update($request->all());
            return redirect()->route('admin.category.index')->with('ok','Cập nhật thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('no','Cập nhật thất bại');
        }
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with('ok','Xóa thể loại thành công');
    }
}
