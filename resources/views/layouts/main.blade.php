<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ config('app.url') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Discovery </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('css')
</head>
<body>

    @include('partials.navbar')

    <div>
        @yield('content')
    </div>

    {!! js('app') !!}
    {!! js('ajax') !!}

    @if ($errors->any())
    <script> displayErrors(@json($errors->all())) </script>
    @endif

    @stack('scripts')
</body>
</html>