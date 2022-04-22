@extends('layouts.layout')
@section('title', "剣道スコア")
@section('body')
    <body class="antialiased">
        <a href="{{ route('score-create') }}">スコア登録</a>
        <a href="{{ route('score-history') }}">スコア履歴</a>
        <a href="{{ route('player-list') }}">プレイヤー一覧</a>
    </body>
@endsection
