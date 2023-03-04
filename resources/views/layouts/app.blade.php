<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'undefined') | Dystopia</title>
    <link rel="stylesheet" href="{{ asset('static/styles/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('static/styles/css/app.css') }}">
</head>

<body>
    <x-navbar>
        <x-navlink :href="route('home')" :active="request()->routeIs('home')">Home</x-navlink>
        <x-navlink :href="route('about')" :active="request()->routeIs('about')">About</x-navlink>
        <x-navlink :href="route('post')" :active="request()->routeIs('post')">Post</x-navlink>
    </x-navbar>
    @yield('content')

    <script src="{{ asset('static/styles/js/popper.min.js') }}"></script>
    <script src="{{ asset('static/styles/js/bootstrap.min.js') }}"></script>
</body>

</html>
