@extends('layouts.app')
@section('title', '基本情報技術者試験の概要 | 基本情報技術者試験')
@section('content')
    <div>
        <a href="{{ route('home.withComments') }}">HOME</a>
        &nbsp;&Gt;&nbsp;
        <strong>試験の概要</strong>
    </div>
    <section class="side-section">
        <h5>基本情報技術者試験の概要</h5>

        <h6>1.基本用法技術者の位置付け</h6>
        <p>国家試験である情報技術者試験の試験区分の一つです。
            ITエンジニアとして基本的な知識・技能を有することを国が証明します。
            この試験で得た知識をもとにレベル3の応用技術者試験や、さらに各分野が問われるレベル4の高度試験などを目指すことができます。</p>

        <h6>2.受験資格や年齢制限はない</h6>
        <p>基本情報技術者に限らず、情報処理技術者試験を受験するのに特別な条件はありません。
            年齢、実務経験、学歴などを問わずどなたでも挑戦していただける試験です。</p>

        <h6>3.受験料</h6>
        <p><strong class="red">7,500</strong>円(税込み)です。</p>
        <p>クレジットカード・コンビニエンスストア払い・Pay-easy払いが選択可能ですが、振込手数料は各自の負担となります。
            領収書は、株式会社シー・ビーティ・ソリューションズ(CBTS)の受験者専用サイト上のマイページからダウンロードできます。</p>

        <h6>4.受験日の日程</h6>
        <p>2023年4月より試験が通年化されたため、年間を通していつでも受験することができます。
            ただし、受験した後はその後<strong class="red">30</strong>日間は再受験できないというリテイクポリシーがあるので、受験可能なのは30日に1回までとなります。</p>

        <h6>5.試験方式</h6>
        <p>コンピュータの画面上に出題される問題に対して、マウス操作で正しい解答を選択していく<strong class="red">CBT</strong>(Computer Based Testing)方式で行われます。</p>

        <h6>6.試験形式</h6>
        <P>科目A試験と科目B試験に分かれており、両方の試験で<strong class="red">60></strong>%以上の得点をとることで合格となります。
            科目A試験と科目B試験は同日受験です。</P>

        <dl>
            <dt>科目A試験</dt>
            <dd>試験時間:90分、出題数:60問、四肢択一式
                <br>
                テクノロジ系、マネジメント系、ストラテジ系から出題
            </dd>
            <dt>科目B試験</dt>
            <dd>試験時間:100分、出題数:20問、多肢択一式
                <br>
                データ構造及びアルゴリズムが8割、セキュリティが2割
            </dd>
        </dl>

        <h6>7.合格発表</h6>
        <p>試験日の翌月中旬にIPAのウェブサイトで合格者が発表されます。
            合格証書の発送と官報への掲載は、さらにその1カ月ほど後です。
            1月受験なら合格発表は2月中旬、合格証書の発送は3月中旬といった感じです。
            なお、不合格者への通知はありません。</p>

        <h6>8.試験会場</h6>
        <p>全国47都道府県の主要都市で開催されます。
            どこで受験できるかは試験開催状況から確認できます。</p>

        <h6>9.申し込み方法</h6>
        <p>株式会社シー・ビーティ・ソリューションズ(CBTS)のWebサイト(<a
                href="#">htttps://cbt-s.com/examinee/</a>)で、受験登録を行い、マイページから受験予約を行います(変更は試験日3日前まで可能です)。
            受験申込みはいつでもできますが、申込可能な試験日は当月から3カ月先の月末まで試験日時までとなります。
            なお、同一試験で複数の受験日を予約することはできません。</p>

        <h6>10.主催団体・問い合わせ先</h6>
        <p>独立行政法人『情報処理推進機構』</p>
        <p>〒113-8663</p>
        <p>東京都文京区本駒込2-28-8 文京グリーンコートセンターオフィス15階</p>
        <p>ホームページ:<a href="#">https://www.ipa.go.jp/shiken/</a></p>
        <p>問い合わせ先:<a href="#">https://www.ipa.go.jp/contact.html</a></p>
    </section>
@endsection()
