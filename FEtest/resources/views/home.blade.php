@extends('layouts.app')
@section('title', '基本情報技術者試験')
@section('content')
    <section>
        <h5>新着情報</h5>
        <dl class="hp-dl-container">
            @foreach ($articles as $article)
                @if ($article->latestComment->created_at->diffInMinutes(now()) < 60)
                    <dt>{{ $article->latestComment->created_at->diffInMinutes(now()) }}分前</dt>
                @elseif($article->latestComment->created_at->diffInHours(now()) < 24)
                    <dt>{{ $article->latestComment->created_at->diffInHours(now()) }}時間前</dt>
                @else
                    <dt>{{ $article->latestComment->created_at->format('Y.m.d') }}</dt>
                @endif
                <dd>
                    <p>『<a
                            href="{{ route('comments.show', $article) }}">[{{ $article->id }}]{{ $article->title }}</a>』に新しい投稿がありました
                        <br>
                        最終投稿者：{{ $article->latestComment->name }}さん 投稿数：{{ $article->comments_count }}
                    </p>
                </dd>
            @endforeach
        </dl>
    </section>
@endsection()
