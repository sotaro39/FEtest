@extends('layouts.app')
@section('content')
    <div class="article-content-container">

        @foreach ($articles as $article)
            <a href="#">
                <h5>{{ $article->title }}</h5>
                <div>[{{ $article->id }}]&nbsp;更新 | 投稿数:{{ $article->comments_count }}&nbsp;最終投稿者:さん</div>
            </a>
        @endforeach

    </div>
@endsection()
