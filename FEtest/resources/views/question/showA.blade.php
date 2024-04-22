@extends('layouts.app')
@section('content')
    <article>
        <div>
            <a href="#">HOME</a>
            &nbsp;&Gt;&nbsp;
            <span style="font-weight:bold">基本情報技術者過去問道場（登録者253,000人突破）</span>
        </div>
        <section>
            <h4>&spades;基本情報技術者過去問道場</h4>
            <hr align="cener">
            <div>
                「基本情報技術者試験過去問道場」は、基本情報技術者試験過去問大(2,800問)の中からランダムに出題する完全解説付きのWeb問題集です。
                PC/スマホ/タブレットを使って、スキマ時間を活用して無料で過去問演習に取り組むことができ、学習履歴を管理することも可能です。
                試験対策としてご活用ください。
            </div>
        </section>
        <div class="question-conent">
            <div class="year-contents-container">
                <form action="{{ route('question.show') }}" method="post">
                    @csrf
                    @foreach ($years as $year)
                        <div class="year-contents">
                            <input class="visually-hidden" type="checkbox" name="years[]" id="{{ $year->id }}"
                                value="{{ $year->id }}" />
                            <label for="{{ $year->id }}" class="year">{{ $year->year }}</label>
                        </div>
                    @endforeach
                    <button type="submit">submit</button>
                </form>
            </div>
        </div>

        <ul class="tab_btn">
            <li class="tab_name ab_name--one is-active">タブ１</li>
            <li class="tab_name tab-name--two">タブ２</li>
            <li class="tab_name tab_name--three">タブ３</li>
        </ul>
        <div class="tab_content tab_content--one is-show">
            <div class="tab_content-inner">
                <p class="tab_description">タブ１のテキスト</p>
            </div>
        </div>
        <div class="tab_content tab_content--two">
            <div class="tab_content-inner">
                <p class="tab_description">タブ２のテキスト</p>
            </div>
        </div>
        <div class="tab_content tab_content--three">
            <div class="tab_content-iiner">
                <p class="tab_description">タブ３のテキスト</p>
            </div>
        </div>


    </article>
    <script src="{{ mix('js/showA.js') }}"></script>
@endsection()
