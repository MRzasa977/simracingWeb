require('./bootstrap');

import Vue from 'vue';

import { InertiaApp } from '@inertiajs/inertia-vue';
import { InertiaForm } from 'laravel-jetstream';
import PortalVue from 'portal-vue';
import createLeagueForm from './components/createLeagueForm.vue';

Vue.use(InertiaApp);
Vue.use(InertiaForm);
Vue.use(PortalVue);

Vue.component('hello-dev', require('./components/HelloDevelopers.vue').default);



const form = new Vue({
    el:'#form',
    components: {
        createLeagueForm
    },

})
