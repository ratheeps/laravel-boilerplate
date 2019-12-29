<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts._meta')
    @include('layouts._style')
</head>
<body>
    <div id="app">
        @include('layouts._nav')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('layouts._script')
</body>
</html>
