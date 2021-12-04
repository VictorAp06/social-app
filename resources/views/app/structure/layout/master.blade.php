<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Social Uniube')</title>

    @include('app.structure.partials.main-styles')
</head>
<body>
    @yield('header')

    @yield('content')

    @yield('footer')

    @include('app.structure.partials.main-bottom-scripts')
    @yield('bottom-scripts')
    @yield('scripts')
</body>
</html>