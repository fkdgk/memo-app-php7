<head>
    <meta name="robots" content="noindex">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css' . version()) }}" rel="stylesheet">
    <script src="{{ asset('js/variable.js'. version()) }}"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{asset('js/module.js' . version())}}" type="module"></script>
</head>