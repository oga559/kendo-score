<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>スコア履歴一覧</title>
</head>
<body>
    {{-- 今までのスコアを表示 --}}
    @foreach ($score as $scores)
    <p>試合名:    {{ $scores->game_name }}</p>
        @foreach ($scores->players as $players)
            <a href={{ route('graph',$players->id) }}>
                {{ $players->name }}
                <br>
            </a>
        @endforeach
    @endforeach
</body>
</html>
