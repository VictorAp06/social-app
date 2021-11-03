<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
    <title>Document</title>
</head>
<body>
    <div class="text-center mt-5">
        <img src="/assets/img/logos/logo.png" alt="Logo da Universidade de Uberaba">
    </div>
    <div id="app">
        <login-component
            :errors={{$errors}}
        ></login-component>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>