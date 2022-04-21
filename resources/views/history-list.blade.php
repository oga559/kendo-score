<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>スコア履歴一覧</title>
</head>
<body>
    {{-- 今までのスコアを表示 --}}
    @foreach ($score as $scores)
    <a href={{ route('history-detail',$scores->id) }}>
        {{ $scores->game_name }}
        <br>
    </a>
    @endforeach
</body>
</html>
