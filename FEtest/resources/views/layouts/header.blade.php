<div class="header-container">
    <div class="header-contents">
        <div class="header-icons">
            <div>基本情報技術者 試験情報＆徹底解説 -新制度に完全対応-</div>
            <div><a href="{{ route('home.withComments') }}"><img src="{{ asset('storage/d-origin.jpg') }}" width="500"
                        height="70"></a></div>
        </div>
        <div class="header-data">
            <div>受験日を設定すると<br>カウントダウンが表示されます</div>
            <button>設定する</button>
        </div>
    </div>
</div>

<ul class="nav-menu">
    <li><a href="#">過去問解説</a>
        <ul>
            <li><a href="#">令和３年</a></li>
        </ul>
    </li>
    <li><a href="/feis">基本情報技術者とは</a></li>
    <li><a href="{{ route('home.index') }}">過去問道場</a>
        <ul>
            <li><a href="{{ route('home.index') }}">過去問道場 (科目A)</a></li>
            <li><a href="#">過去問道場 (旧・午後試験)</a></li>
        </ul>
    </li>
    <li><a href="{{ route('articles.index') }}">掲示板</a></li>
    <li><a href="/text">参考書・問題集</a></li>
    <li><a href="{{ route('login.index') }}">Login</a></li>
</ul>
