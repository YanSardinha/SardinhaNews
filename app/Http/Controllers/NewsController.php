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

    public function store(Request $request){

        $news = new News;

        $news->title = $request->title;
        $news->description_min = $request->description_min;
        $news->full_description = $request->full_description;

        // Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()){
            
            $requestImage = $request->image;
            
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/news'), $imageName);

            $news->image = $imageName;

        }

        $news->save();

        return redirect('/')->with('msg','Evento criado com sucesso!');

    }
}
