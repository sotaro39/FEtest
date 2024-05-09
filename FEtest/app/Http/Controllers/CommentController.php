<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $article_id)
    {
        $this->validate($request, [
            'name' => 'required|max:20',
            'body' => 'required',
            'pass' => 'required|max:20'
        ]);


        try {
            DB::beginTransaction();


            $comment = new Comment();
            $comment->article_id = $article_id;
            $comment->name = $request->name;
            $comment->body = $request->body;
            $comment->password = $request->pass;
            $comment->save();

            DB::commit();

            return redirect()->route('articles.show', $article_id)->with('success', 'Article and comment saved successfully');
        } catch (\Exception $e) {
            DB::rollback();

            return redirect()->back()->with('エラーが発生しました: ', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show($articleId)
    {
        //　記事に関するコメントを取得
        $article = Article::with('comments')->find($articleId);

        if (!$article) {
            return redirect()->route('articles.index')->with('error', '指定された記事が見つかりません。');
        }

        //　スレッド名を表示させたいため、articleテーブルデータも送る
        return view('articles.show', [
            'article' => $article,
            'comments' => $article->comments,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $commentId = $comment->input('comment_id');
    }

}
