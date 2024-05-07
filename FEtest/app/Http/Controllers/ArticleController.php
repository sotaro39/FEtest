<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 各記事のコメント数と最新コメントを取得し、降順に並べる
        $articles = Article::withCount('comments')
            ->with('latestComment')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //　二つのテーブルにデータを保存するため、それぞれのオブジェクト作成
        $article = new Article();
        $comment = new Comment();

        // 空のオブジェクトを連想配列で送る
        return view('articles.create', [
            'article' => $article,
            'comment' => $comment,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // バリデーション　全部必須項目、titleは255文字以内、nameは20文字以内
        $this->validate($request, [
            'title' => 'required|max:255',
            'name' => 'required|max:20',
            'body' => 'required'
        ]);

        try {

            DB::beginTransaction();

            // articlesテーブルに保存
            $article = new Article();
            $article->title = $request->title;
            $article->name = $request->name;
            $article->save();

            //　commentsテーブルに保存
            $comment = new Comment();
            $comment->article_id = $article->id;
            $comment->name = $request->name;
            $comment->body = $request->body;
            $comment->password = "fkyelsas2";
            $comment->is_protected = true;
            $comment->save();

            DB::commit();

            return redirect()->route('articles.index')->with('success', 'Article and comment saved successfully');
        } catch (\Exception $e) {
            DB::rollback();

            return redirect()->back()->with('エラーが発生しました: ', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
