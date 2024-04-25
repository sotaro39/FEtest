<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理者ログイン画面</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>管理者ログイン</h1>
        @error('login')
            <div class="alert alert-danger">
                &#x26A0; {{ $message }}
            </div>
        @enderror
        <form method="POST" action="/admin/login">
            @csrf
            <label class="mt-3">ユーザーID</label>
            <input type="text" name="userid" class="form-control">
            <label class="mt-3">パスワード</label>
            <input class="form-control" type="password" name="password">
            <button class="btn btn-primary mt-5" type="submit">ログイン</button>
        </form>
    </div>
</body>

</html>
