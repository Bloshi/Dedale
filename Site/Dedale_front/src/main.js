// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from '@/App'
import Routes from '@/router/index'

import VueResource from 'vue-resource'
import Auth from '@/packages/auth/Auth.js'
// semantic
import SuiVue from 'semantic-ui-vue'
import 'semantic-ui-css/semantic.min.css'

Vue.use(SuiVue)
Vue.use(VueResource)
Vue.use(Auth)

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
