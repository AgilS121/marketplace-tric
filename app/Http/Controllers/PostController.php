<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Clockwork\Storage\Search;

class PostController extends Controller
{
    //
    public function index()
    {
        //mengambil nilai pencarian
        // $posts = Post::latest();

        // if (request('search')) {
        //     $posts->where('title', 'LIKE', '%' . request('search') . '%' )->orWhere('body', 'LIKE', '%' . request('search') . '%');
        // }

        //Detail judul
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in '. $category->name;
        }
        if (request('user')) {
            $user = User::firstWhere('username', request('user'));
            $title = ' in '. $user->name;
        }

        return view('posts',[
            "title" => "All Posts" . $title,
            "active" => "posts",
            // "posts" => \App\Models\Post::all() 
            // mengurutkan data terakhir masuk
            "posts" => Post::latest()->filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString()//Load Digunakan N+1 Problem & pagination
        ]);

    }
    
    public function show(\App\Models\Post $post)
    {
        return view('post', [
            "title" => "Single post",
            "active" => "posts",
            "post" => $post
        ]);
    }

    //search
    
    // public function search(Request $request)
    // {
    //     $posts = Post::latest();
    //     if ($request->has('search')) {
    //         $posts->where('title', 'LIKE', '%' . $request->search . '%' )->orWhere('body', 'LIKE', '%' . $request->search . '%');
    //     }else {
    //         $posts::all();
    //     }
    // return view('posts',[
    //     "title" => 'All Post',
    //     "posts" => $posts->get()//Load Digunakan N+1 Problem
    // ]);
    // }
}