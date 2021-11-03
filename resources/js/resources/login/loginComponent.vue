<template>
    <div class="container">
        <div v-if="errors">
            <input v-model="errors">
        </div>
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <h3 class="text-center text-info">Social</h3>
                    <div class="form-group">
                        <label for="username" class="text-info">Usuário</label><br>
                        <input type="text" v-model="form.email" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-info">Senha</label><br>
                        <input type="password" v-model="form.password" name="password" id="password" class="form-control">
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-primary btn-lg form-control" @click="onSubmit">Login</button>
                    </div>
                    <div id="register-link" class="text-right">
                        <a href="/rede/inicio/cadastro" class="text-info">Registre-se</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['errors'],
    data() {
        return {
            form: {
                email: '',
                password: '',
            }
        }
    },
    methods: {
        onSubmit() {
            var _this = this;

            axios.post('/rede/inicio/auth', _this.form).then(function (response) {
                console.log('é nozes');
            }, function (error) {
                console.log('não rolou');
                //_this.$notify({ type: 'error', title: 'Error!', text: error.response.data.message ? error.response.data.message : _this.trans[dialogType].error });
            });
        }
    }
}
</script>

<style>
    body {
    margin: 35px;
    padding: 35px;
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
    #register-link {
        margin-top: .8rem;
        font-size: 1rem;
        font-weight: 700;
    }
</style>