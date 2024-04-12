<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>道場</title>
    <link rel="stylesheet" href="/main.css">
</head>
<body>
    <header>
        <div>aaa</div>
    </header>
    <main>
        <h1>HelloWdorld</h1>
        <div class="question-conent">
            <div class="year-contents-container">
                <form action="{{ route('question.show') }}" method="post">
                @foreach ($years as $year)
                <div class="year-contents">
                    <input class="visually-hidden" type="checkbox" name="years" id="{{ $year->year }}" />
                    <label for="{{ $year->year }}" class="year">{{ $year->year }}</label>
                </div>
                @endforeach
                </form>
            </div>
        </div>
    </main>
</body>
</html>