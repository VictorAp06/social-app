import AppForm from "../app-components/Form/AppForm";

Vue.component('cadastro-component', {
    mixins: [AppForm],
    data() {
        return {
            form: {
                first_name: '',
                last_name: '',
                data_nascimento: '',
                cpf: '',
                email: '',
                password: '',
                repeteEmail: '',
                repetePassword: '',
            },
            error_first_name: '',
            error_last_name: '',
            error_email: '',
            error_password: '',
            error_cpf: '',
            error_data_nascimento: '',
        }
    },
    methods: {
        validateForm() {
            var i, errorMsg = false;

            if (this.form.first_name == '' || this.form.first_name == null) {
                errorMsg = true;
                this.error_first_name = "Necessário preencher o nome!";
            } 
            if (this.form.last_name == '' || this.form.last_name == null) {
                errorMsg = true;
                this.error_last_name = "Necessário preencher o sobrenome!";
            }
            if (this.form.data_nascimento == '' || this.form.data_nascimento == null) {
                errorMsg = true;
                this.error_data_nascimento = "Necessário preencher a data de nascimento!";
            }
            if (this.form.cpf == '' || this.form.cpf == null) {
                errorMsg = true;
                this.error_cpf = "Necessário preencher o cpf!";
            }
            if (this.form.email == '' || this.form.email == null) {
                errorMsg = true;
                this.error_email = "Necessário preencher o email!";
            } else if (!(this.form.email === this.form.repeteEmail)) {
                errorMsg = true;
                this.error_email = "Endereços de email não são iguais!";
            }
            if (this.form.password == '' || this.form.password == null) {
                errorMsg = true;
                this.error_password = "Necessário preencher a senha!";
            } else if (!(this.form.repetePassword === this.form.repetePassword)) {
                errorMsg = true;
                this.error_password = "Endereços de senhas não são iguais!";
            }
            if (errorMsg) {
                //this.$notify({ type: 'error', title: 'Error!', text: errorMsg});
                return false;
            }
            return true;
        },
        onSubmit() {
            var _this = this;

            if (_this.validateForm()) {
                axios.post('/rede/inicio/cadastro', _this.form).then(function (response) {
                    console.log('é nozes');
                    window.location.href = '/rede/inicio';
                }, function (error) {
                    console.log('não rolou');
                    //_this.$notify({ type: 'error', title: 'Error!', text: error.response.data.message ? error.response.data.message : _this.trans[dialogType].error });
                });
            } 
        },
    }
});