@extends('layouts.layout')
@section('title', '剣道スコア')
@push('style')
    <link rel="stylesheet" href="/css/index.css">
@endpush
@section('body')
    <nav class="navbar-expand-sm">
                        <ul class="d-flex justify-content-around navbar-nav">
                            <li class="nav-item">
                                <a href="{{ route('score-create') }}" class="text-dark text-decoration-none">スコア登録</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('score-history') }}" class="text-dark text-decoration-none">スコア履歴</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('player-list') }}" class="text-dark text-decoration-none">選手一覧</a>
                            </li>
                        </ul>
    </nav>
@endsection
