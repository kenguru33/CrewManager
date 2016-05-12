import Vue from 'vue';
import UserList from './components/UserList.vue';

new Vue({
    el: '#app',
    components: { UserList }
});

$.ajaxSetup({
    headers: {
        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
    }
});



