<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function notice($id) {
        $news = News::findOrFail($id);
        return view('information.notice', compact('news'));
    }
}
