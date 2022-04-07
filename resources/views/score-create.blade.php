<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/score_create.css">
    <title>スコアページ</title>
</head>

<body>

<input type="button" value="リセット" onclick="reset_btn();">

    <div class="main">
        <form method="POST" action="{{ route('store') }}">
            @csrf
                <input type="hidden" value="{{ Auth::id() }}" name="user_id">
                <input type="text" class="input" name="game_name"/>
                <input type="date" class="date" name="game_day"/>
                <div class="score_main">
                    <div class="left">
                        <div>先鋒</div>
                            <input type="text" class="input" name="score[name][]" placeholder="名前" value="{{ old('name') }}">
                            <input type="hidden" value="1" name="score[position][]">
                            <div class="select_wrapper">
                                <select class="select"  name="score[first_point][]"  onclick="del_select(3);">
                                    <option value="0"></option>
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[second_point][]" onclick="del_select(4);">
                                    <option value="0"></option>
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[third_point][]" onclick="del_select(5);">
                                    <option value="0"></option>
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                    </div>

                    <div class="right">
                        <div>先鋒</div>
                            <input type="text" class="input" name="score[name][]" placeholder="名前" value="{{ old('name') }}">
                            <input type="hidden" value="2" name="score[position][]">
                            <div class="select_wrapper">
                                <select class="select"  name="score[first_point][]"  onclick="del_select(0);">
                                    <option value="0"></option>
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[second_point][]" onclick="del_select(1);">
                                    <option value="0"></option>
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[third_point][]" onclick="del_select(2);">
                                    <option value="0"></option>
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                    </div>
                </div>

                <div class="score_main">
                    <div class="left">
                        <div>次鋒</div>
                            <input type="text" class="input" name="score[name][]" placeholder="名前" value="{{ old('name') }}">
                            <input type="hidden" value="3" name="score[position][]">
                            <div class="select_wrapper">
                                <select class="select"  name="score[first_point][]"  onclick="del_select(9);">
                                    <option value="0"></option>
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[second_point][]" onclick="del_select(10);">
                                    <option value="0"></option>
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[third_point][]" onclick="del_select(11);">
                                    <option value="0"></option>
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                    </div>
                <div class="right">
                    <div>次鋒</div>
                        <input type="text" class="input" name="score[name][]" placeholder="名前" value="{{ old('name') }}">
                        <input type="hidden" value="4" name="score[position][]">
                        <div class="select_wrapper">
                            <select class="select"  name="score[first_point][]"  onclick="del_select(6);">
                                <option value="0"></option>
                                <option value="1">面</option>
                                <option value="2">小手</option>
                                <option value="2">胴</option>
                                <option value="3">突き</option>
                                <option value="4">反則</option>
                            </select>
                        </div>
                        <div class="select_wrapper">
                            <select class="select"  name="score[second_point][]" onclick="del_select(7);">
                                <option value="0"></option>
                                <option value="1">面</option>
                                <option value="2">小手</option>
                                <option value="2">胴</option>
                                <option value="3">突き</option>
                                <option value="4">反則</option>
                            </select>
                        </div>
                        <div class="select_wrapper">
                            <select class="select"  name="score[third_point][]" onclick="del_select(8);">
                                <option value="0"></option>
                                <option value="1">面</option>
                                <option value="2">小手</option>
                                <option value="2">胴</option>
                                <option value="3">突き</option>
                                <option value="4">反則</option>
                            </select>
                        </div>
                </div>
                </div>

                <div class="score_main">
                    <div class="left">
                        <div>中堅</div>
                            <input type="text" class="input" name="score[name][]" placeholder="名前" value="{{ old('name') }}">
                            <input type="hidden" value="5" name="score[position][]">
                            <div class="select_wrapper">
                                <select class="select"  name="score[first_point][]"  onclick="del_select(15);">
                                    <option value="0"></option>
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[second_point][]" onclick="del_select(16);">
                                    <option value="0"></option>
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[third_point][]" onclick="del_select(17);">
                                    <option value="0"></option>
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                    </div>
                    <div class="right">
                        <div>中堅</div>
                            <input type="text" class="input" name="score[name][]" placeholder="名前" value="{{ old('name') }}">
                            <input type="hidden" value="6" name="score[position][]">
                            <div class="select_wrapper">
                                <select class="select"  name="score[first_point][]"  onclick="del_select(12);">
                                    <option value="0"></option>
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[second_point][]" onclick="del_select(13);">
                                    <option value="0"></option>
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[third_point][]" onclick="del_select(14);">
                                    <option value="0"></option>
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                </div>
                </div>

                <div class="score_main">
                    <div class="left">
                        <div>副将</div>
                            <input type="text" class="input" name="score[name][]" placeholder="名前" value="{{ old('name') }}">
                            <input type="hidden" value="7" name="score[position][]">
                            <div class="select_wrapper">
                                <select class="select"  name="score[first_point][]"  onclick="del_select(21);">
                                    <option value="0"></option>
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[second_point][]" onclick="del_select(22);">
                                    <option value="0"></option>
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[third_point][]" onclick="del_select(23);">
                                    <option value="0"></option>
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                    </div>
                    <div class="right">
                        <div>副将</div>
                            <input type="text" class="input" name="score[name][]" placeholder="名前" value="{{ old('name') }}">
                            <input type="hidden" value="8" name="score[position][]">
                            <div class="select_wrapper">
                                <select class="select"  name="score[first_point][]"  onclick="del_select(18);">
                                    <option value="0"></option>
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[second_point][]" onclick="del_select(19);">
                                    <option value="0"></option>
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[third_point][]" onclick="del_select(20);">
                                    <option value="0"></option>
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                </div>
                </div>

                <div class="score_main">
                    <div class="left">
                        <div>大将</div>
                            <input type="text" class="input" name="score[name][]" placeholder="名前" value="{{ old('name') }}">
                            <input type="hidden" value="9" name="score[position][]">
                            <div class="select_wrapper">
                                <select class="select"  name="score[first_point][]"  onclick="del_select(27);">
                                    <option value="0"></option>
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[second_point][]" onclick="del_select(28);">
                                    <option value="0"></option>
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[third_point][]" onclick="del_select(29);">
                                    <option value="0"></option>
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                    </div>
                    <div class="right">
                        <div>大将</div>
                            <input type="text" class="input" name="score[name][]" placeholder="名前" value="{{ old('name') }}">
                            <input type="hidden" value="10" name="score[position][]">
                            <div class="select_wrapper">
                                <select class="select"  name="score[first_point][]"  onclick="del_select(24);">
                                    <option value="0"></option>
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[second_point][]" onclick="del_select(25);">
                                    <option value="0"></option>
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[third_point][]" onclick="del_select(26);">
                                    <option value="0"></option>
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                </div>
                </div>
            <input type="submit" value="保存">
        </form>
    </div>
    </div>
    <script src="{{ asset('js/score_create.js') }}"></script>
</body>

</html>
