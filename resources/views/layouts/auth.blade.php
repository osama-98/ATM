<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
{{--    <link href="{{ asset('') }}" rel="stylesheet">--}}
    @include('parts.styles')
</head>

<body>

<div class="login-page">
    @yield('content')
</div>

@include('parts.scripts')
</body>
</html>
