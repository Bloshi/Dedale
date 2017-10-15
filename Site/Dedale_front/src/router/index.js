import Vue from 'vue'
import Router from 'vue-router'
//
import SignIn from '@/components/auth/SignIn'
import SignUp from '@/components/auth/SignUp'
import Feed from '@/components/Feed'
import CreateGame from '@/components/game/CreateGame'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/connection',
      name: 'Se connecter',
      component: SignIn,
      meta: {
        forVisitors: true
      }
    },
    {
      path: '/enregistrement',
      name: 'S\'enregistrer',
      component: SignUp,
      meta: {
        forVisitors: true
      }
    },
    {
      path: '/feed',
      name: 'Actualitée jeux',
      component: Feed,
      meta: {
        forAuth: true
      }
    },
    {
      path: '/games/create',
      name: 'Ajouter un jeu',
      component: CreateGame,
      meta: {
        forAuth: true
      }
    }
  ],
  linkActiveClass: 'active',
  mode: 'history'
})
