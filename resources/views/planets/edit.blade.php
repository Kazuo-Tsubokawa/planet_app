<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>惑星情報編集</h1>
    <form action="/planets/{{ $planet->id }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="name">名前</label>
            <input type="text" name="name" id="" value="{{ $planet->name }}">
        </p>
        <p>
            <label for="name_english">名前(英語)</label>
            <input type="text" name="name_english" id="" value="{{ $planet->name_english }}">
        </p>
        <p>
            <label for="radius">半径</label>
            <input type="number" name="radius" id="" value="{{ $planet->radius }}">
        </p>
        <p>
            <label for="weight">重量</label>
            <input type="text" name="weight" id="" value="{{ $planet->weight }}">
        </p>

        <input type="submit" value="更新">
        <a href="/planets">戻る</a>
    </form>
</body>

</html>
