<template>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Social Uniube</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Usuário:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Senha:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Entrar">
                            </div>
                        </form>
                        <div id="register-link" class="text-right">
                            <a href="/cadastro" class="text-info">Registre-se</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    setup() {
        
    },
}
</script>

<style>
    body {
    margin: 0;
    padding: 0;
    background-color: #17a2b8;
    height: 100vh;
    }
    h3 {
        font-size: 2rem;
        font-weight: 700;
    }
    label {
        font-size: 1.5rem;
        font-weight: 700;
    }
    #login .container #login-row #login-column #login-box {
    margin-top: 45px;
    max-width: 600px;
    height: 320px;
    border: 1px solid #9C9C9C;
    background-color: #EAEAEA;
    }
    #login .container #login-row #login-column #login-box #login-form {
    padding: 20px;
    }
    #login .container #login-row #login-column #login-box #login-form #register-link {
    margin-top: -85px;
    }
</style>