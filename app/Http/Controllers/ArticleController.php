<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use function view;

class ArticleController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'short_des' => 'required',
        ]);

        $article = Article::create([
                    'title' => $request->title,
                    'description' => $request->description,
                    'short_des' => $request->short_des,
        ]);
        return Redirect::to('article');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $article_show = Article::find($id);
        return view('articles.show', compact('article_show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $article_update = Article::find($id);
        $article_update->title = $request->title;
        $article_update->description = $request->description;
        $article_update->short_des = $request->short_des;
        $article_update->save();
        return Redirect::to('article');
    }

    public function uploadImages(Request $request, $id) {
        $article_update = Article::find($id);
        $image = $request->file('file');
        $imageName = time() . $image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);
        $article_update->article_images()->create(['url' => $image]);
        return response()->json(['success' => $imageName]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
