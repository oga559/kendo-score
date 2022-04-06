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
    <div class="main">
        <form method="POST" action="{{ route('store') }}">
            @csrf
                <input type="hidden" value="{{ Auth::id() }}" name="user_id">
                <input type="text" class="input" name="game_name"/>
                <input type="date" name="game_day"/>
                <div class="score_main">
                    <div class="left">
                        <div>先鋒</div>
                            <input type="text" class="input" name="score[name][]" placeholder="名前" value="{{ old('name') }}">
                            <input type="hidden" value="1" name="score[position][]">
                            <div class="select_wrapper">
                                <select class="select"  name="score[first_point][]">
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[second_point][]">
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[third_point][]">
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
                                <select class="select"  name="score[first_point][]">
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[second_point][]">
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[third_point][]">
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
                                <select class="select"  name="score[first_point][]">
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[second_point][]">
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[third_point][]">
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
                            <select class="select"  name="score[first_point][]">
                                <option value="1">面</option>
                                <option value="2">小手</option>
                                <option value="2">胴</option>
                                <option value="3">突き</option>
                                <option value="4">反則</option>
                            </select>
                        </div>
                        <div class="select_wrapper">
                            <select class="select"  name="score[second_point][]">
                                <option value="1">面</option>
                                <option value="2">小手</option>
                                <option value="2">胴</option>
                                <option value="3">突き</option>
                                <option value="4">反則</option>
                            </select>
                        </div>
                        <div class="select_wrapper">
                            <select class="select"  name="score[third_point][]">
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
                                <select class="select"  name="score[first_point][]">
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[second_point][]">
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[third_point][]">
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
                                <select class="select"  name="score[first_point][]">
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[second_point][]">
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[third_point][]">
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
                                <select class="select"  name="score[first_point][]">
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[second_point][]">
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[third_point][]">
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
                                <select class="select"  name="score[first_point][]">
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[second_point][]">
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[third_point][]">
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
                                <select class="select"  name="score[first_point][]">
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[second_point][]">
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[third_point][]">
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
                                <select class="select"  name="score[first_point][]">
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[second_point][]">
                                    <option value="1">面</option>
                                    <option value="2">小手</option>
                                    <option value="2">胴</option>
                                    <option value="3">突き</option>
                                    <option value="4">反則</option>
                                </select>
                            </div>
                            <div class="select_wrapper">
                                <select class="select"  name="score[third_point][]">
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
