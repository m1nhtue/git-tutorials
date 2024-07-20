<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
Paginator::useBootstrap();

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(5);
        return view('admin.Post.post',compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.Post.create_post',compact('categories'));
    }
    public function store(StorePostRequest $request)
    {
        if($request->hasFile('photo')){
            $imageName = time().''.$request->photo->getClientOriginalName();
            $request->photo->move(public_path('uploads'), $imageName);
            $request['image'] = $imageName;
        }
        try {
            Post::create($request->all());
            return redirect()->route('admin.post.index')->with('ok','Thêm bài viết thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('no','Thêm bài viết thất bại');
        }
    }

    public function show(Post $post)
    {
        //
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}
