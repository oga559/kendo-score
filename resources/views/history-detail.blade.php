<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>スコア履歴詳細</title>
</head>
<body>
    <form method="POST" class="score-form" action="{{ route('store') }}">
        @csrf
        <div class="position-wrapper">
            <input type="hidden" value="{{ Auth::id() }}" name="user_id">
            <input type="text" name="game_name" value="{{ old('game_name',$score->game_name) }}"/>
            <input type="date" name="game_day" value="{{ old('game_day',Str::limit($score->game_day,10,'')) }}"/>
            <div>先鋒</div>
            <div>
                <input type="text" name="score[name][]" placeholder="名前" value="{{ old('name',$score->players[0]->name )}}">
                <input type="hidden" value="1" name="score[position][]">
            </div>
            <select name="score[first_point][]">
                <option value="1">面</option>
                <option value="2">小手</option>
                <option value="2">胴</option>
                <option value="3">突き</option>
                <option value="4">反則</option>
            </select>
            <select name="score[first_point][]">
                <option value="1">面</option>
                <option value="2">小手</option>
                <option value="2">胴</option>
                <option value="3">突き</option>
                <option value="4">反則</option>
            </select>
            <div>先鋒</div>
            <div>
                <input type="text" name="score[name][]" placeholder="名前" value="{{ old('name',$score->players[1]->name) }}">
                <input type="hidden" value="2" name="score[position][]">
            </div>
        </div>

        <div class="position-wrapper">
            <div>次鋒</div>
            <div>
                <input type="text" name="score[name][]" placeholder="名前" value="{{ old('name',$score->players[2]->name) }}">
                <input type="hidden" value="3" name="score[position][]">
            </div>
            <select name="score[first_point][]">
                <option value="1">面</option>
                <option value="2">小手</option>
                <option value="2">胴</option>
                <option value="3">突き</option>
                <option value="4">反則</option>
            </select>
            <select name="score[first_point][]">
                <option value="1">面</option>
                <option value="2">小手</option>
                <option value="2">胴</option>
                <option value="3">突き</option>
                <option value="4">反則</option>
            </select>
            <div>次鋒</div>
            <div>
                <input type="text" name="score[name][]" placeholder="名前" value="{{ old('name',$score->players[3]->name) }}">
                <input type="hidden" value="4" name="score[position][]">
            </div>
        </div>

        <div class="position-wrapper">
            <div>中堅</div>
            <div>
                <input type="text" name="score[name][]" placeholder="名前" value="{{ old('name',$score->players[4]->name) }}">
                <input type="hidden" value="5" name="score[position][]">
            </div>
            <select name="score[first_point][]">
                <option value="1">面</option>
                <option value="2">小手</option>
                <option value="2">胴</option>
                <option value="3">突き</option>
                <option value="4">反則</option>
            </select>
            <select name="score[first_point][]">
                <option value="1">面</option>
                <option value="2">小手</option>
                <option value="2">胴</option>
                <option value="3">突き</option>
                <option value="4">反則</option>
            </select>
            <div>中堅</div>
            <div>
                <input type="text" name="score[name][]" placeholder="名前" value="{{ old('name',$score->players[5]->name) }}">
                <input type="hidden" value="6" name="score[position][]">
            </div>
        </div>

        <div class="position-wrapper">
            <div>副将</div>
            <div>
                <input type="text" name="score[name][]" placeholder="名前" value="{{ old('name',$score->players[6]->name) }}">
                <input type="hidden" value="7" name="score[position][]">
            </div>
            <select name="score[first_point][]">
                <option value="1">面</option>
                <option value="2">小手</option>
                <option value="2">胴</option>
                <option value="3">突き</option>
                <option value="4">反則</option>
            </select>
            <select name="score[first_point][]">
                <option value="1">面</option>
                <option value="2">小手</option>
                <option value="2">胴</option>
                <option value="3">突き</option>
                <option value="4">反則</option>
            </select>
            <div>副将</div>
            <div>
                <input type="text" name="score[name][]" placeholder="名前" value="{{ old('name',$score->players[7]->name) }}">
                <input type="hidden" value="8" name="score[position][]">
            </div>
        </div>

        <div class="position-wrapper">
            <div>大将</div>
            <div>
                <input type="text" name="score[name][]" placeholder="名前" value="{{ old('name',$score->players[8]->name) }}">
                <input type="hidden" value="9" name="score[position][]">
            </div>
            <select name="score[first_point][]">
                <option value="1">面</option>
                <option value="2">小手</option>
                <option value="2">胴</option>
                <option value="3">突き</option>
                <option value="4">反則</option>
            </select>
            <select name="score[first_point][]">
                <option value="1">面</option>
                <option value="2">小手</option>
                <option value="2">胴</option>
                <option value="3">突き</option>
                <option value="4">反則</option>
            </select>
            <div>大将</div>
            <div>
                <input type="text" name="score[name][]" placeholder="名前" value="{{ old('name',$score->players[9]->name) }}">
                <input type="hidden" value="10" name="score[position][]">
            </div>
        </div>
        <input type="submit" value="保存">
    </form>
    </div>
</body>
</html>
