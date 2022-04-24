@extends('layouts.layout')
@section('title', '選手一覧')
@section('body')
    {{-- 今までの選手を表示 --}}
    @foreach ($score as $scores)
        <p>試合名: {{ $scores->game_name }}</p>
        @foreach ($scores->players as $players)
            <a href={{ route('graph', $players->id) }}>
                {{ $players->name }}
                <br>
            </a>
        @endforeach
    @endforeach
@endsection
