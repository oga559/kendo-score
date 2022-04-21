<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
    <title>成績グラフ</title>
</head>

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

</html>
