<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\View;

class CategoryController extends Controller
{
    public function show($name) {
        // カテゴリ情報を取得
        $category = Category::where('slug', $name)->firstOrFail();

        // 質問や投稿などの関連データも取得
        $posts = Post::where('category_id', $category->id)->get();

        return view('category.show', [
            'category' => $category,
            'posts' => $posts,
        ]);
    }

    public function detail($id) {
        $post = Post::with(['user', 'category', 'answers.user'])->findOrFail($id);
    
        return view('post.question', [
            'question' => $post,
            'category' => $post->category,
            'answers' => $post->answers,
        ]);
    }
}
