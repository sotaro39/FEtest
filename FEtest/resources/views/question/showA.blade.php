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

        <div class="tab-panel">
            <!--タブ-->
            <ul class="tab-group">
                <li class="tab tab-A is-active">Tab-A</li>
                <li class="tab tab-B">Tab-B</li>
                <li class="tab tab-C">Tab-C</li>
            </ul>

            <!--タブを切り替えて表示するコンテンツ-->
            <div class="panel-group">
                <div class="panel tab-A is-show">
                    <div class="question-content">
                        <form action="{{ route('question.show') }}" method="post">
                            <div class="year-contents-container">
                                @csrf
                                @foreach ($years as $year)
                                    <div class="year-contents">
                                        <input   class="visually-hidden" type="checkbox" name="years[]"
                                            id="{{ $year->id }}" value="{{ $year->id }}" />
                                        <label for="{{ $year->id }}" class="year">{{ $year->year }}</label>
                                    </div>
                                @endforeach
                            </div>
                            <button type="submit">submit</button>
                        </form>
                    </div>
                </div>
                <div class="panel tab-B">Content-B</div>
                <div class="panel tab-C">Content-C</div>
            </div>
        </div>

    </article>
    <script src="{{ mix('js/showA.js') }}"></script>
@endsection()
