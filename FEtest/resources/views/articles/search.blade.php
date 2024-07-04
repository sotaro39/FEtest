@extends('layouts.app')
@section('title', '検索結果一覧 | 基本情報技術者試験')
@section('content')
    <section>
        <div>
            <a href="{{ route('home.withComments') }}">HOME</a>
            &nbsp;&Gt;&nbsp;
            <a href="{{ route('articles.index') }}">基本情報技術者掲示板</a>
            &nbsp;&Gt;&nbsp;
            <strong>検索結果一覧</strong>
        </div>
        <h5>下記のタイトルがヒットしました</h5>

        @if ($articles->isEmpty())
            <p>検索結果が見つかりませんでした。</p>
        @else
            <ul>
                @foreach ($articles as $article)
                    <div class="card search-results">
                        <a href="{{ route('comments.show', $article->id) }}">
                            <div class="crad-title"><strong>{{ $article->title }}[{{ $article->id }}]</strong></div>

                            <div>投稿者コメント: </div>
                            <div class="card-body">{{ $article->latestComment->body }}</div>
                            <div>投稿者名：<strong>{{ $article->latestComment->name }}</strong>さん</div>
                        </a>
                    </div>
                @endforeach
            </ul>

            {{ $articles->links() }} <!-- ページネーションリンクの表示 -->
        @endif
    </section>
@endsection
