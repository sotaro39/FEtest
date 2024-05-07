@extends('layouts.app')
@section('content')
    <div class="comment-contents-cotainer">
        @foreach ($comments as $comment)
            <div class="comment-contents">
                <ul>
                    <li>{{ $comment->name }}</li>
                    <li>{{ $comment->body }}</li>
                    <li>{{ $comment->created_at }}</li>
                </ul>
            </div>
        @endforeach
    </div>

    <form method="post">
        <div>
            <label for="name">お名前</label>
            <input type="text" name="name">
            <label for="body">本文</label>
            <textarea name="body"></textarea>
            <label for="pass">削除用パスワード</label>
            <input name="pass" type="text">
            <label>
        </div>
    </form>
@endsection