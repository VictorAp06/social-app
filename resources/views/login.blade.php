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
        <login-component inline-template>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-7 p-3">
                        <div id="login-box" class="col-md-12">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (session('danger'))
                                <div class="alert alert-danger">
                                    {{ session('danger') }}
                                </div>
                            @endif
                            <form action="/rede/inicio" method="post">
                                <h3 class="text-center text-info">Social</h3>
                                <div class="form-group">
                                    <label for="email" class="text-info">Usuário</label><br>
                                    <input type="text" v-model="form.email" name="email" id="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-info">Senha</label><br>
                                    <input type="password" v-model="form.password" name="password" id="password" class="form-control">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg form-control">Login</button>
                                </div>
                                <div id="register-link" class="text-right">
                                    <a href="/rede/inicio/cadastro" class="text-info">Registre-se</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </login-component>
    </div>
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>