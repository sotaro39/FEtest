@extends('layouts.app')
@section('content')
    <div>
        <a href="{{ route('home.index') }}">HOME</a>
        &nbsp;&Gt;&nbsp;
        <a href="{{ route('articles.index') }}">基本情報技術者掲示板</a>
        &nbsp;&Gt;&nbsp;
        <span style="font-weight:bold">基本情報技術者とは</span>
    </div>


    <form action="{{ route('articles.store') }}" method="post">
        @csrf
        <label class="articleCreateTitle" for="title">スレッドタイトル</label>
        <input type="text" name="title">
        <label class="articleCreateNmae" for="name">お名前</label>
        <input type="text" name="name">
        <label class="articleCreateBody" for="body">本文（<a href="#">コミュニティガイドライン</a>を順守して適切な投稿を心がけましょう）</label>
        <textarea name="body"></textarea>

        <button type="submit">投稿</button>
    </form>
    <div>
        <span>※質問や投稿内容に回答してくれた方に対しては、【必ず】お礼や返答をお願いいたします。</span><br>
        ※CBT試験では出題内容の公開が禁止されているため、直接的・間接的を問わず、出題内容や難易度を訪ねる質問は厳禁です。<br>
        ※受験後に「この得点で合格していますか」といった類の質問をすることは、スレッドの乱立に繋がるためお控えください。<br>
        ※宣伝や迷惑行為を防止するため、当サイトとIPAサイト以外のURLを含む文章の投稿は禁止されています。<br>
    </div>
@endsection()
