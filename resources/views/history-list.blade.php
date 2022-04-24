@extends('layouts.layout')
@section('title', "スコア履歴一覧")
@section('body')
<body>
    {{-- 今までのスコアを表示 --}}
    @foreach ($score as $scores)
    <a href={{ route('history-detail',$scores->id) }}>
        {{ $scores->game_name }}
        <br>
    </a>
    @endforeach
</body>
@endsection
