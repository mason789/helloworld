<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
//use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Utils\Foo;
use App\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        //$foo = new Foo;

        //$foo->bar();

        // $title = '这里是文章标题';
        // return view('articles.lists',compact('title'));
        $articles = Article::all(); 
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store()
    {
        //
        $input = Request::all();
        $input['intro'] = mb_substr(Request::get('content'),0,64);
        Article::create($input);
        return redirect('/');
        //return $input;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
        $article = Article::findOrFail($id);
        
        return view('articles.show', compact('article'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update()
    {
        //
        $input = Request::all();

        $article = Article::find($input['id']);
        //dd($article);
        $article->update(Request::except('id'));
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        //$article = Article::findOrFail($id);
        //$article::destroy($id);
        Article::destroy($id);
        return redirect('/');
    }
}
