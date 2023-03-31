<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        $search = request('search');

        return view('welcome', ['search' => $search]);
    }

    public function create() {
        return view('news.create');
    }
}
