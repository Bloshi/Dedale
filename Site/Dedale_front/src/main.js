// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from '@/App'
import jQuery from 'jquery'
import Routes from '@/router/index'

import VueResource from 'vue-resource'
import Auth from '@/packages/auth/Auth.js'
// semantic
global.jQuery = jQuery
global.$ = jQuery
import SuiVue from 'semantic-ui-vue'
import 'semantic-ui-css/semantic.min.css'
import 'semantic-ui-css/semantic.min.js'

Vue.use(SuiVue)
Vue.use(VueResource)
Vue.use(Auth)

Vue.http.options.root = 'http://localhost:8000'
Vue.http.headers.common['Authorization'] = 'Bearer ' + Vue.auth.getToken()

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
  template: '<App/>',
  components: {
    App
  },
  router: Routes
})
