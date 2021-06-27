require('./bootstrap');
import { Tooltip, Toast, Popover } from 'bootstrap';
import swal from 'sweetalert';

import Vue from 'vue';

import login from "./views/login";
import home from "./views/home/home";
import AppHeader from "./views/template/AppHeader";
new Vue({
    el: '#app',
    components:{
        login,
        home,
        AppHeader
    }
})
