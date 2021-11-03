<template>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <h3 class="text-center text-info">Rede Social Uniube</h3>
                    <div class="form-group">
                        <label for="firstname" class="text-info">Nome</label><br>
                        <input type="text" v-model="form.firstname" name="firstname" id="firstname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="text-info">Sobrenome</label><br>
                        <input type="text" v-model="form.lastname" name="lastname" id="lastname" class="form-control">
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
                        <button type="button" class="btn btn-primary btn-lg form-control" @click="onSubmit">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                firstname: '',
                lastname: '',
                data_nascimento: '',
                cpf: '',
                email: '',
                password: '',
                repeteEmail: '',
                repetePassword: '',
            }
        }
    },
    methods: {
        onSubmit() {
            var _this = this;

            axios.post('/rede/inicio/cadastro', _this.form).then(function (response) {
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

</style>