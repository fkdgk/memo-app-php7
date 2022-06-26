<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-header.header />
<body>
    <x-nav.nav>
        <x-nav.container>
            <x-nav.brand />
            <x-nav.toggler />
            <x-nav.nav-content>
                {{-- Left Nav --}}
                <x-nav.left />
                
                {{-- Right Nav --}}
                <x-nav.right />
            </x-nav.nav-content>
        </x-nav.container>
    </x-nav.nav>

    <x-main.main>
        @yield('content')
    </x-main.main>

    <x-toast.toast :toast='session("toast")' />
    
    <script src="{{asset('js/custom.js' . version())}}"></script>
    @yield('script')
</body>
</html>
