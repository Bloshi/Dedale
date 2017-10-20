// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from '@/App'
import store from '@/store'
import jQuery from 'jquery'
import Routes from '@/router/index'

import VueResource from 'vue-resource'
import Auth from '@/packages/auth/Auth.js'
import VeeValidate from 'vee-validate';

// semantic
global.jQuery = jQuery
import SuiVue from 'semantic-ui-vue'
import 'semantic-ui-css/semantic.min.css'
import 'semantic-ui-css/semantic.min.js'

Vue.use(SuiVue)
Vue.use(VueResource)
Vue.use(Auth)
Vue.use(VeeValidate)

Vue.http.options.root = 'http://localhost:8000'
Vue.http.headers.common['Authorization'] = 'Bearer ' + Vue.auth.getToken()
Vue.http.interceptors.push( (req, next) => {
  next(res => {
    if(res.status == 404)
      swal(res.status.toString(), res.body.error, "error")
    else if(res.status == 500)
      swal(res.status.toString(), "Il semble y avoir un problème dans nos serveur nos équipes y travail", "error")
  })
})

Vue.config.productionTip = false

Routes.beforeEach(
  (to, from, next) => {
    if (to.matched.some(record => record.meta.forVisitors)) {
      if (Vue.auth.isAuthenticated()) {
        next({
          path: '/feed'
        })
      } else next()
    } else if (to.matched.some(record => record.meta.forAuth)) {
      if (!Vue.auth.isAuthenticated()) {
        next({
          path: '/connection'
        })
      } else next()
    } else next()
  }
)

new Vue({
  el: '#app',
  store,
  template: '<App/>',
  components: {
    App
  },
  router: Routes
})
