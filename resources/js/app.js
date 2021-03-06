/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'

Vue.use(VueRouter)

export let routes = [
    { path: '/test', component: require('./components/test.vue') },
    //{ path: '/atbalstitaji', component: require('./components/atbalstitaji.vue') }
  ]


  const router = new VueRouter({
    routes // short for `routes: routes`
  })

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('nometnes', require('./components/nometnes.vue').default);
Vue.component('navbar', require('./components/navBar.vue').default);
Vue.component('user', require('./components/user.vue').default);
Vue.component('atbalstitaji', require('./components/atbalstitaji.vue').default);
Vue.component('kontakti', require('./components/kontakti.vue').default);
Vue.component('nometnes_guest', require('./components/nometnes_guest.vue').default);
Vue.component('atbalstitaji_guest', require('./components/atbalstitaji_guest.vue').default);
Vue.component('user_dalib', require('./components/user_dalib.vue').default);
Vue.component('nom_admin', require('./components/nom_admin.vue').default);
Vue.component('nom', require('./components/nom.vue').default);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
