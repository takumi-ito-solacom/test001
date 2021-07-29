<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    //Articleテーブル情報の取得
    public function index(){
        $articles = Article::all();
        return view('article.index',['articles' => $articles]);
    }

    //新規登録画面の表示
    public function create() {
        return view('article.create');
    }

    //新規登録処理
    public function store(Request $request) {
        $article = new Article;
        $article->title = $request->title;
        $article->body = $request->body;
        $article->writer_code = $request->writer_code;
        $article->score = $request->score;
        $article->save();
 
        return view('article.store');
    }

    //更新画面の表示
    public function edit(Request $request, $id) {
        $article = Article::find($id);
        return view('article.edit', ['article' => $article]);
    }

    //更新処理
    public function update(Request $request) {
        $article = Article::find($request->id);
        $article->title = $request->title;
        $article->body = $request->body;
        $article->writer_code = $request->writer_code;
        $article->score = $request->score;
        $article->save();
 
        return view('article.update');
    }

    //削除画面の表示
    public function show(Request $request, $id) {
        $article = Article::find($id);
        return view('article.show', ['article' => $article]);
    }
    
    //削除処理
    public function delete(Request $request) {
        Article::destroy($request->id);
        return view('article.delete');
    }
}
