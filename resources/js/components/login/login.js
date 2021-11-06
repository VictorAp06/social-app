import AppForm from "../app-components/Form/AppForm";

Vue.component('login-component', {
    mixins: [AppForm],
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
})