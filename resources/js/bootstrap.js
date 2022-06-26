window.$ = window.jQuery = require('jquery');
window._ = require('lodash');
window.axios = require('axios');
window.bootstrap = require('bootstrap/dist/js/bootstrap.esm.js');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/* Ladda */
import * as Ladda from 'ladda';
Ladda.bind('button[type=submit]', {timeout: 10000});
const submitButtonElm = document.querySelector('button[type="submit"]');
(submitButtonElm) ? laddaButton = Ladda.create(submitButtonElm) : void(0);

/* select2 */
require('select2');
$("select").select2({
  width: 'resolve',
  dropdownAutoWidth: false,
});

