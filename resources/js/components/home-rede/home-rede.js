import AppForm from "../app-components/Form/AppForm";

Vue.component('home-rede-component', {
    mixins: [AppForm],
    data() {
        return {
            form: {
                noticia_id: 1,
                evento_id: 1,
                image: {
                    name: '',
                    file: {}
                },
                descricao: '',
            }
        }
    },
    methods: {
        validateForm() {

        },
        onSubmit() {

        },
        salvarPublicacao() {

        },
        onFileSelected(event) {

        }
    }
});