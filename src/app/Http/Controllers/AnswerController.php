<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function index($postId)
    {
        $post = Post::with(['user', 'category', 'answers.user'])->findOrFail($postId);

        return view('post.question', [
            'question' => $post,
            'category' => $post->category,
            'answers' => $post->answers,
        ]);
    }
}
