<base href="/">
<meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" href="{{ asset('favicon.ico') }}">
<link href="{{ asset('assets/metronic/plugins/global/plugins.bundle.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/metronic/css/style.bundle.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/preloader.css') }}" rel="stylesheet">

@yield('styles')
@stack('styles')
@livewireStyles
