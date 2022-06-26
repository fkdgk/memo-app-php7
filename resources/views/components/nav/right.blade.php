<ul class="navbar-nav ms-auto">
    
    {{-- 未ログイン --}}
    @if (Route::is('register'))
        <x-nav.item name='login' href='{{route("login")}}' class='btn-outline-primary' btn=true />
    @endif

    @if (Route::is('login'))
        <x-nav.item name='register' href='{{route("register")}}' class='btn-outline-primary' btn=true />
    @endif

    {{-- ログイン済 --}}
    @auth
    <x-nav.drop-down>
        <x-nav.drop-down-link />
        <x-nav.drop-down-content>            
            <x-nav.drop-down-item name='階 編集' route='config.floor.index' />
            <x-nav.drop-down-item name='階 作成' route='config.floor.create' />
            <x-nav.drop-down-logout />
        </x-nav.drop-down-content>    
    </x-nav.drop-down>
    @endauth
    
</ul>