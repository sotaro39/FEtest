@extends('layouts.app')
@section('content')
    <a href="{{ route('articles.index') }}" class="createArticleBtn">スレッド一覧に戻る</a>

    <div class="comment-contents-cotainer">
        @foreach ($comments as $comment)
            <div class="comment-contents">
                <ul>
                    <li>{{ $comment->id }}</li>
                    <li>{{ $comment->name }}</li>
                    <li>{{ $comment->body }}</li>
                    <li>{{ $comment->created_at }}</li>
                </ul>
            </div>
        @endforeach
    </div>

    <form action="{{ route('comments.store', ['article_id' => $article->id]) }}" method="post">
        @csrf
        <div class="comment-create-container">
            <label>お名前</label>
            <input type="text" name="name">
            <label>本文</label>
            <textarea name="body"></textarea>
            <label>削除用パスワード</label>
            <input type="password" name="pass">
            <button type="submit">投稿する</button>
        </div>
    </form>

    <div>
        <span>※質問や投稿内容に回答してくれた方に対しては、【必ず】お礼や返答をお願いいたします。</span><br>
        ※CBT試験では出題内容の公開が禁止されているため、直接的・間接的を問わず、出題内容や難易度を訪ねる質問は厳禁です。<br>
        ※受験後に「この得点で合格していますか」といった類の質問をすることは、スレッドの乱立に繋がるためお控えください。<br>
        ※宣伝や迷惑行為を防止するため、当サイトとIPAサイト以外のURLを含む文章の投稿は禁止されています。<br>
    </div>



    <form action="{{ route('comments.destroy') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="comment_id">{{ __('カテゴリー') }}<span
                    class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <select class="form-control" id="comment_id" name="comment_id">
                @foreach ($comments as $comment)
                    @if ($comment->id != 1)
                        <option value="{{ $comment->id }}">{{ $comment->id }}</option>
                    @else
                        <option value="" disabled>---</option>
                    @endif
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">送信</button>
    </form>
@endsection
