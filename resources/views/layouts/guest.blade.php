<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/fontawesome-free-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') . '?v=' . config('app.versionnumber') }}" type="image/x-icon" />
</head>
<body class="hold-transition login-page text-sm" style="background-color: #f9f9f9; background: url({{asset('img/guest-window-bg.jpg') . '?v=' . config('app.versionnumber') }});">
    <div class="login-box bg-primary" style="background-color: #ffffff; border: 1px solid #f0f0f0; box-shadow: 0px 0px 18px rgba(0, 0, 0, 0.09);">
        <div class="login-logo" style="margin: 12px auto; padding: 12px;">
            <a href="{{ route('dashboard') }}"><img src="{{ url('img/guest-window-logo.png') . '?v=' . config('app.versionnumber')  }}" alt="{{config('app.name')}}" class="img img-responsive center-block"/></a>
        </div>
        <div class="card" style="border: 1px solid #f0f0f0; border-top: 1px solid #c5c5c5;">
            @yield('content')
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
</body>
</html>
