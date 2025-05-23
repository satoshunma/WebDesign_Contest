<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index() {
        $questions = Question::all();
        return view('post.question', ['questions' => $questions]);
    }
}
