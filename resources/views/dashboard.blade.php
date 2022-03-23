<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <form method="POST">
            @csrf
            <input type="hidden" value="{{ Auth::id() }}" name="user_id">
            <label>先鋒</label>
            <div>
                <input type="text" name="name" placeholder="名前" value="{{ old('name') }}">
            </div>
                <input>
            <label>先鋒</label>
            <div>
                <input type="text" name="name" placeholder="名前" value="{{ old('name') }}">
            </div>

            <label>次鋒</label>
            <div>
                <input type="text" name="name" placeholder="名前" value="{{ old('name') }}">
            </div>

            <label>次鋒</label>
            <div>
                <input type="text" name="name" placeholder="名前" value="{{ old('name') }}">
            </div>

            <label>中堅</label>
            <div>
                <input type="text" name="name" placeholder="名前" value="{{ old('name') }}">
            </div>

            <label>中堅</label>
            <div>
                <input type="text" name="name" placeholder="名前" value="{{ old('name') }}">
            </div>

            <label>副将</label>
            <div>
                <input type="text" name="name" placeholder="名前" value="{{ old('name') }}">
            </div>

            <label>副将</label>
            <div>
                <input type="text" name="name" placeholder="名前" value="{{ old('name') }}">
            </div>

            <label>大将</label>
            <div>
                <input type="text" name="name" placeholder="名前" value="{{ old('name') }}">
            </div>

            <label>大将</label>
            <div>
                <input type="text" name="name" placeholder="名前" value="{{ old('name') }}">
            </div>

            <div>
                <input type="submit" value="保存">
            </div>
        </form>
    </div>
</x-app-layout>
