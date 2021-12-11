<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" 
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

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