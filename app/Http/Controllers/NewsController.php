<?php

namespace App\Http\Controllers;

use App\Models\News,User;
use Illuminate\View\View;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {

        $search = request('search');

        if($search) {

            $news = News::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();
        
        }else {
            $news = News::all();
        }

        

        return view('welcome', ['news' => $news, 'search' => $search]);
    }

    public function create() {
        return view('news.create');
    }

    public function show($id){
        $news = News::findOrFail($id);
        
        return view('news.show', [
            'news' => $news
        ]);
    }

    public function store(Request $request){

        $news = new News;

        $news->title = $request->title;
        $news->description_min = $request->description_min;
        $news->full_description = $request->full_description;
        $news->key_words = $request->key_words;
        $news->date = $request->date;

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
