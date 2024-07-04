@extends('layouts.app')
@section('title', '掲示板作成 | 基本情報技術者試験')
@section('content')
    <div>
        <a href="{{ route('home.withComments') }}">HOME</a>
        &nbsp;&Gt;&nbsp;
        <a href="{{ route('articles.index') }}">基本情報技術者掲示板</a>
        &nbsp;&Gt;&nbsp;
        <span style="font-weight:bold">新規投稿フォーム</span>
    </div>

    <form action="{{ route('articles.store') }}" method="post">
        @csrf
        <div class="create-article">
            <div class="form-group">
                <label for="articleCreateTitle">スレッドタイトル</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="タイトルを入力">
            </div>
            <div class="form-group">
                <label for="articleCreateName">お名前</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="お名前を入力">
            </div>
            <div class="form-group">
                <label class="articleCreateBody">本文（<a href="#">コミュニティガイドライン</a>を順守して適切な投稿を心がけましょう）</label>
                <textarea type="text" class="form-control" id="body" name="body" placeholder="本文を入力"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">投稿</button>
        </div>
    </form>
    <div>
        <span class="red">※質問や投稿内容に回答してくれた方に対しては、【必ず】お礼や返答をお願いいたします。</span><br>
        ※CBT試験では出題内容の公開が禁止されているため、直接的・間接的を問わず、出題内容や難易度を訪ねる質問は厳禁です。<br>
        ※受験後に「この得点で合格していますか」といった類の質問をすることは、スレッドの乱立に繋がるためお控えください。<br>
        ※宣伝や迷惑行為を防止するため、当サイトとIPAサイト以外のURLを含む文章の投稿は禁止されています。<br>
    </div>
@endsection()
