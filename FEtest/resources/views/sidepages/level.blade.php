@extends('layouts.app')
@section('content')
    <div>
        <a href="#">HOME</a>
        &nbsp;&Gt;&nbsp;
        <strong>基本情報技術者とは</strong>
    </div>
    <section class="side-section">
        <h5>基本情報技術者試験の難易度</h5>
        <p>基本情報技術者資格の難易度は、<a
                href="#">共通キャリア・スキルフレームワーク</a>の中で<strong>レベル2</strong>と位置付けられており、情報処理技術者試験の中では下から2番目の難易度の試験です。
            各問題の難度がITパスポートのレベル1からレベル2となり出題知識の広さと深さが増すことになります。
            たとえば「USB」インターフェースの問題だおしたら、ITパスポートではただ機器の特徴が問われたのに対して、基本情報技術者試験ではより突っ込んだ最大接続台数や転送モード・最大転送速度の問題が出題されたりするということです。
        </p>
        <p>情報処理というと難しく聞こえますが、適切な学習をすることで<strong>独学でも十分に合格可能</strong>ですし、実際に私も独学４カ月で合格することができました。
            基本的に問題を多くをしめるのは語句問題なので、テキスト学習と過去問演習でどれだけ知識を詰め込めるかが勝負の分かれ目となってきます。
        </p>
        <h5>基本情報技術者試験とITパスポート 難易度比較</h5>
        <p>すでにITパスポートなどを受験された方のためにもわかりやすいように、基本情報技術者試験との比較をしてみましょう。
        </p>
        <tbod>
            <tr>
                <td></td>
                <th>ITパスポート</th>
                <th>情報セキュリティ</th>
                <th>基本情報技術者</th>
            </tr>
            <tr>
                <th>合格率</th>
                <td>約50%</td>
                <td>50%～60%</td>
                <td>30%～40%</td>
            </tr>
            <tr>
                <th>出題数</th>
                <td>100問</td>
                <td>科目A 48問
                    <br>
                    科目B 12問
                </td>
                <td>科目A 60問
                    <br>
                    科目B 20問
                </td>
            </tr>
            <tr>
                <th>出題形式</th>
                <td>小問で四肢択一</td>
                <td>科目A 小問で四肢択一
                    <br>
                    科目B 小問で多岐択一
                </td>
                <td>科目A 小問で四肢択一
                    <br>
                    科目B 小問で多岐択一
                </td>
            </tr>
            <tr>
                <th>試験時間</th>
                <td>120分</td>
                <td>科目A＋科目B合わせて120分
                </td>
                <td>科目A 90分、
                    科目B 100分
                </td>
            </tr>
            <tr>
                <th>試験範囲</th>
                <td>ストラテジ35%
                    <br>
                    マネジメント20%
                    <br>
                    テクノロジ45%
                </td>
                <td>情報セキュリティ管理がメイン
                </td>
                <td>テクノロジ系の範囲が増加
                    <br>
                    科目Bはアルゴリズムとプログラム言語問題が全体の8割
                </td>
            </tr>
        </tbod>
        <p>合格率をみてもわかるように、基本情報技術者試験は<strong>ITパスポート試験と比べて難易度が上がることは間違いありません</strong>。
            試験時間も科目Aと科目Bに分かれて長くなります。
            <br><br>
            この中で学習のネックになるのが午後問題で出題されるアルゴリズムやプログラミングに関する分野でしょう。
            語句の暗記問題とは情報処理の応用理解が求められるため、今まで勉強したことのない人にとっては一からの勉強で理解まで時間がかかると思います。
        </p>
        <h5>ITパスポート試験の合格者は有利</h5>
        <p>基本的に上記のITパスポート試験の受験勉強で学習した内容はそのまま役に立ちます。
            <br><br>
            特に午前問題のマネジメント・ストラテジについてはほぼ学習する必要がないほどだと思います。
            テクノロジ系でもITパスポート試験を合格した時点で基礎はできているので、情報処理の初学者と比較すると勉強期間をかなり短縮することができるでしょう。
            基本情報技術者の頻出分野であるテクノロジ系を重点的に学習し、昔勉強した分野は過去問の演習で出題パターンを暗記していきましょう。
        </p>
    </section>
@endsection()