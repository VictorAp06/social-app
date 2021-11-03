require('./bootstrap');
window.Vue = require('vue').default;
import BootstrapVue from "bootstrap-vue"

Vue.use(BootstrapVue) 
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('login-component', require('./resources/login/loginComponent.vue').default);
Vue.component('cadastro-component', require('./resources/cadastro/cadastroComponent.vue').default);

const app = new Vue({
    el: '#app',
    BootstrapVue
});
