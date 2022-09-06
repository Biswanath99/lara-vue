require('./bootstrap');
window.Vue = require('vue');
import VueRouter from 'vue-router';
import routes from './routes';
import VueSimpleAlert from "vue-simple-alert";
import Vue from "vue";

Vue.use(VueRouter);
Vue.use(VueSimpleAlert);

newFunction();

function newFunction() {

    const addUser = new Vue({
        el: '#addUser',
        router: new VueRouter(routes)
    });

    const manageUsers = new Vue({
        el: '#manageUsers',
        router: new VueRouter(routes)
    });

}
