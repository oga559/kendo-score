<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/score.css">
    <title>スコアページ</title>
</head>
<body>
        <form method="POST" class="score-form"  action="{{ route('store') }}" >
            @csrf
            <div class="position-wrapper">
                <input type="hidden" value="{{ Auth::id() }}" name="user_id">
                <div>先鋒</div>
                <div>
                    <input type="text" name="score[name][]" placeholder="名前" value="{{ old('name') }}">
                    <input type="hidden" value="1" name="score[position][]">
                </div>
                    <input type="text" name="score[point][]">
                    <input type="text" name="score[point][]">
                <div>先鋒</div>
                <div>
                    <input type="text" name="score[name][]" placeholder="名前" value="{{ old('name') }}">
                    <input type="hidden" value="2" name="score[position][]">
                </div>
            </div>

            <div class="position-wrapper">
                <div>次鋒</div>
                <div>
                    <input type="text" name="score[name][]" placeholder="名前" value="{{ old('name') }}">
                    <input type="hidden" value="3" name="score[position][]">
                </div>
                <input type="text" name="score[point][]">
                <input type="text" name="score[point][]">
                <div>次鋒</div>
                <div>
                    <input type="text" name="score[name][]" placeholder="名前" value="{{ old('name') }}">
                    <input type="hidden" value="4" name="score[position][]">
                </div>
            </div>

            {{-- <div class="position-wrapper">
                <div>中堅</div>
                <div>
                    <input type="text" name="name" placeholder="名前" value="{{ old('name') }}">
                    <input type="hidden" value="4" name="position">
                </div>
                <input type="text" name="point">
                <input type="text" name="point">
                <div>中堅</div>
                <div>
                    <input type="text" name="name" placeholder="名前" value="{{ old('name') }}">
                    <input type="hidden" value="5" name="position">
                </div>
            </div>

            <div class="position-wrapper">
                <div>副将</div>
                <div>
                    <input type="text" name="name" placeholder="名前" value="{{ old('name') }}">
                    <input type="hidden" value="6" name="position">
                </div>
                <input type="text" name="point">
                <input type="text" name="point">
                <div>副将</div>
                <div>
                    <input type="text" name="name" placeholder="名前" value="{{ old('name') }}">
                    <input type="hidden" value="7" name="position">
                </div>
            </div>

            <div class="position-wrapper">
                <div>大将</div>
                <div>
                    <input type="text" name="name" placeholder="名前" value="{{ old('name') }}">
                    <input type="hidden" value="8" name="position">
                </div>
                <input type="text" name="point">
                <input type="text" name="point">
                <div>大将</div>
                <div>
                    <input type="text" name="name" placeholder="名前" value="{{ old('name') }}">
                    <input type="hidden" value="9" name="position">
                </div> --}}
            </div>
                <input type="submit" value="保存">
        </form>
    </div>
</body>

</html>
