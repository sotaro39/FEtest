@extends('layouts.app')
@section('title', $article->title . 'の掲示板 | 基本情報技術者試験')
@section('content')
    <section>
        <div>
            <a href="{{ route('home.withComments') }}">HOME</a>
            &nbsp;&Gt;&nbsp;
            <a href="{{ route('articles.index') }}">基本情報技術者掲示板</a>
            &nbsp;&Gt;&nbsp;
            <strong>{{ $article->title }}</strong>
        </div>
        <h5>{{ $article->title }} [{{ $article->id }}]</h5>
        <div style="text-align: center; margin-top: 20px;">
            <a href="{{ route('articles.index') }}" class="createArticleBtn">スレッド一覧に戻る</a>
        </div>
        <div class="comment-contents-cotainer">
            @foreach ($comments as $comment)
                <div class="comment-content">
                    <div class="comments-headet"><span class="red">{{ $comment->name }}</span>さん
                        (No.{{ $comment->board_sequence }})
                    </div>
                    <div class="card">
                        @if ($comment->trashed())
                            <div class="card-body">
                                <p class="card-text">このコメントは削除されました</p>
                            </div>
                            <div class="card-footer text-muted">
                                {{ $comment->created_at }}
                            </div>
                    </div>
                @else
                    <div class="card-body">
                        <p class="card-text">{{ $comment->body }}</p>
                    </div>
                    <div class="card-footer text-muted">
                        {{ $comment->created_at }}
                    </div>
                </div>
            @endif
        </div>
        @endforeach
        </div>

        <form action="{{ route('comments.store', ['article_id' => $article->id]) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">お名前</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="お名前を入力">
            </div>
            <div class="form-group">
                <label for="body">本文</label>
                <textarea class="form-control" id="body" name="body" rows="4" placeholder="本文を入力"></textarea>
            </div>
            <div class="form-group">
                <label for="pass">削除用パスワード</label>
                <input type="password" class="form-control" id="pass" name="pass" placeholder="パスワードを入力">
            </div>
            <div class="caution-text">
                ※CBT試験では出題内容の公開が禁止されているため、直接的・間接的を問わず、出題内容や難易度を訪ねる質問は厳禁です。<br>
                ※宣伝や迷惑行為を防止するため、当サイトとIPAサイト以外のURLを含む文章の投稿は禁止されています。<br>
            </div>
            <button type="submit" class="btn btn-primary">投稿する</button>
        </form>




        <div class="delete-comment">
            <form action="{{ route('comments.destroy', ['article_id' => $article->id]) }}" method="POST">
                @csrf
                <div class="form-group" style="margin-bottom: 10px">
                    <label for="comment_id">{{ __('カテゴリー') }}<span
                            class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                    <select class="form-control" id="comment_id" name="comment_id">
                        @foreach ($comments as $comment)
                            @if ($comment->board_sequence != 1 && !$comment->trashed())
                                <option value="{{ $comment->board_sequence }}">{{ $comment->board_sequence }}</option>
                            @else
                                <!-- <option value="" disabled>---</option> -->
                            @endif
                        @endforeach
                    </select>
                    <div class="form-group">
                        <label for="pass">削除用パスワード</label>
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="パスワードを入力">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" onclick="return confirm('本当に削除しますか?')">送信</button>
            </form>
        </div>
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </section>
@endsection
