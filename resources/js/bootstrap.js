import _ from 'lodash';
window._ = _;

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Alpine from 'alpinejs';
import intersect from "@alpinejs/intersect/builds/module";
import focus from "@alpinejs/focus/builds/module";

Alpine.plugin(intersect)
Alpine.plugin(focus)
window.Alpine = Alpine
Alpine.start()
