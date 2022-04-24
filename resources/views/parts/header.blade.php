<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="collapse navbar-collapse">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="navbar-brand">メインページ</a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                this.closest('form').submit();" class="navbar-brand">
                                    {{('ログアウト') }}
                                </x-jet-dropdown-link>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="navbar-brand">ログイン</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="navbar-brand">登録</a>
                            @endif
                        @endauth
            </div>
        @endif
        </li>

        </ul>
    </div>
</nav>
