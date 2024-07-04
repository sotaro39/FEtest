@extends('layouts.app')
@section('title', '掲示板一覧 | 基本情報技術者試験')
@section('content')
    <section>
        <div>
            <a href="{{ route('home.withComments') }}">HOME</a>
            &nbsp;&Gt;&nbsp;
            <a href="{{ route('articles.index') }}">基本情報技術者掲示板</a>
            &nbsp;&Gt;&nbsp;
            <strong>{{ $articles->firstItem() }}～{{ $articles->lastItem() }}件目</strong>
        </div>
        <h5>スレッド一覧（{{ $articles->total() }}件中{{ $articles->firstItem() }}～{{ $articles->lastItem() }}件表示）</h5>
        <p>基本情報技術者掲示板は、受験者同士の雑談や1人ではわからない問題を解決する場として設置してあります。
            コミュニティとしての活用はもちろん、管理人への連絡に使っていただいてもかまいません。
        </p>
        <form action="{{ route('articles.search') }}" method="get">
            <div class="search-contents">
                <label for="search" style="font-weight: bold">掲示板検索 ： </label>
                <input type="text" name="content" id="search">
                <button type="submit" class="btn btn-success"><i class="bi bi-search"></i></button>
            </div>
        </form>

        <div style="text-align: center; margin-top: 20px;"><a href="{{ route('articles.create') }}"
                class="createArticleBtn">新規スレッドを作成する</a>
        </div>
        <div class="article-content-container">
            @foreach ($articles as $article)
                <div class="article-content">
                    <a href="{{ route('comments.show', $article) }}">
                        <h5>{{ $article->title }}</h5>
                        <div>[{{ $article->id }}]&nbsp;{{ $article->updated_at->format('Y.m.d H:i') }}更新 |
                            投稿数:{{ $article->comments_count }}&nbsp;最終投稿者:
                            @if ($article->latestComment)
                                {{ $article->latestComment->name }}さん
                            @else
                                投稿はまだありません
                            @endif
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
        <div>

        </div>
        <div class="pagination-links">
            {{ $articles->links() }}
        </div>
    </section>
@endsection
