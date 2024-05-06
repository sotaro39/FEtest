@extends('layouts.app')
@section('content')
    <h3><span>ス</span>レッド一覧(???~~???)</h3>
    <hr>

    <a href="{{ route('articles.create') }}" class="createArticleBtn">新規スレッドを作成する</a>
    <div class="article-content-container">

        @foreach ($articles as $article)
            <a href="{{ route('articles.show', $article) }}">
                <h5>{{ $article->title }}</h5>
                <div>[{{ $article->id }}]&nbsp;更新 |
                    投稿数:{{ $article->comments_count }}&nbsp;最終投稿者:
                    @if ($article->latestComment)
                        {{ $article->latestComment->name }}さん
                    @else
                        投稿はまだありません
                    @endif
                </div>
            </a>
        @endforeach

    </div>
    <div>

    </div>
@endsection
