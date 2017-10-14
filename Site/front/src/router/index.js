import Vue from 'vue'
import Router from 'vue-router'
import App from '@/App'
// semantic
import SuiVue from 'semantic-ui-vue'
import 'semantic-ui-css/semantic.min.css'

Vue.use(Router)
Vue.use(SuiVue)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Hello',
      component: App
    }
  ]
})
