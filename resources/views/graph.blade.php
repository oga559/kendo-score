@extends('layouts.layout')
@section('title', "成績グラフ")
@section('body')
<body>
    <div class="content">
        <canvas id="allChart"></canvas>
    </div>

    <script>
        window.men = @json($men);
        window.kote = @json($kote);
        window.dou = @json($dou);
    </script>
    <script src="{{ mix('js/graph.js') }}"></script>

</body>
@endsection
