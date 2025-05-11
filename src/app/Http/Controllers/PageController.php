<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;
use App\Models\Post;
use App\Http\Requests\AuthorRequest;

class PageController extends Controller
{
    public function index()
{
    $categories = Category::all();

    // ランダムな投稿を5件取得
    $randomPosts = Post::inRandomOrder()->take(5)->get();

        $categories = Category::all();
        $randomPosts = \App\Models\Post::inRandomOrder()->take(11)->get(); // ランダムに11件取得
        return view('index', [
            'categories' => $categories,
            'randomPosts' => $randomPosts,
        ]);
}

    public function inquiry() {
        return view('inquiry');
    }

    public function category() {
        $categories = Category::all();
        return view('category', ['categories' => $categories]);
    }

    public function news() {
        $newses = News::all();
        return view('news', ['newses' => $newses]);
    }

    public function newarriveal() {
        $newPosts = Post::inRandomOrder()->take(11)->get();
        return view('newarriveal', ['posts' => $newPosts]);
    }
    

    public function mypage() {
        return view('mypage');
    }

   
}
