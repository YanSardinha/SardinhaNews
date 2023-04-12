<?php

namespace App\Http\Controllers;

use App\Models\News,User;
use Illuminate\View\View;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        $news = News::all();

        return view('welcome', ['news' => $news]);
    }

    public function create() {
        return view('news.create');
    }

    public function show(string $id): View
    {
        return view('news.show', [
            'user' => User::findOrFail($id)
        ]);
    }
}
