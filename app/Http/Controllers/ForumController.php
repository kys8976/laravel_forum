<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class ForumController extends Controller
{
    //
    public function index()
    {
        return view('forum.index');
    }
    public function category($id)
    {
        $category=Category::find($id);
        $posts = Post::where('category_id',$id)->orderby('created_at','desc')
        ->get();
        return view('forum.category')
        ->with('posts',$posts)
        ->with('category_title',$category->title);
    }
    public function view($id)
    {
        $post=Post::find($id);
        return view('forum.view')
        ->with('post',$post);
    }
    public function edit($id)
    {
        $categorys = Category::orderby('title','asc')->get();
        $post=Post::find($id);
        return view('forum.edit')
        ->with('categories',$categorys)
        ->with('post',$post);
    }
    
    public function create()
    {
        $categorys = Category::orderby('title','asc')->get();
        return view('forum.create')
        ->with('categories',$categorys);
    }

    public function store(Request $request)
    {
        $post =new Post;
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->content = $request->content;
        $post->save();

        $result = $request->all();

        $data = array(
            'result' => $result
        );

        return response()->json($data);
    }
    public function update(Request $request)
    {
        $post=Post::find($request->post_id);
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->content = $request->content;
        $post->save();

        $result = $request->all();

        $data = array(
            'result' => $result
        );

        return response()->json($data);
    }
    public function delete($id)
    {
        $category = Post::find($id);
        $category->delete();
        return redirect('/');

    }

    
}
