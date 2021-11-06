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
    <div id="app">
        <cadastro-component inline-template>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <h3 class="text-center text-info">Rede Social Uniube</h3>
                            <div class="form-group">
                                <label for="firstname" class="text-info">Nome</label><br>
                                <input type="text" v-model="form.first_name" name="firstname" id="firstname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="text-info">Sobrenome</label><br>
                                <input type="text" v-model="form.last_name" name="lastname" id="lastname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nascimento" class="text-info">Data nascimento</label><br>
                                <input type="date" v-model="form.data_nascimento" name="nascimento" id="nascimento" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="cpf" class="text-info">Cpf</label><br>
                                <input type="text" v-model="form.cpf" name="cpf" id="cpf" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info">Email</label><br>
                                <input type="text" v-model="form.email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="repeteEmail" class="text-info">Insira novamente o Email</label><br>
                                <input type="text" v-model="form.repeteEmail" name="repeteEmail" id="repeteEmail" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="repeteEmail" class="text-info">Senha</label><br>
                                <input type="password" v-model="form.password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="repetePassword" class="text-info">Insira novamente a senha</label><br>
                                <input type="password" v-model="form.repetePassword" name="repetePassword" class="form-control">
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-primary btn-lg form-control" @click="onSubmit">Cadastrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </cadastro-component>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>