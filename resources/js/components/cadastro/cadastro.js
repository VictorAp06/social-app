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
            }
        }
    },
    methods: {
        validateForm() {
            var i, errorMsg = false;

            if (this.form.first_name == '' || this.form.first_name == null) {
                errorMsg = "Necessário preencher o nome!";
            } 
            if (this.form.last_name == '' || this.form.last_name == null) {
                errorMsg = "Necessário preencher o sobrenome!";
            }
            if (this.form.data_nascimento == '' || this.form.data_nascimento == null) {
                errorMsg = "Necessário preencher a data de nascimento!";
            }
            if (this.form.cpf == '' || this.form.cpf == null) {
                errorMsg = "Necessário preenchero o cpf!";
            }
            if (this.form.email == '' || this.form.email == null) {
                errorMsg = "Necessário preencher o email!";
            }

            if (errorMsg) {
                // this.$notify({ type: 'error', title: 'Error!', text: errorMsg});
                return false;
            }
            return true;
        },
        onSubmit() {
            var _this = this;

            if (_this.validateForm()) {
                axios.post('/rede/inicio/cadastro', _this.form).then(function (response) {
                    console.log('é nozes');
                }, function (error) {
                    console.log('não rolou');
                    //_this.$notify({ type: 'error', title: 'Error!', text: error.response.data.message ? error.response.data.message : _this.trans[dialogType].error });
                });
            } 
        }
    }
});