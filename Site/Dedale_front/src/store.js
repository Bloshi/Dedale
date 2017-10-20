import Vue from 'vue'
import Vuex from 'vuex'

import AuthStore from '@/store/AuthStore';
import GamesStore from '@/store/GamesStore';

Vue.use(Vuex)

export default new Vuex.Store({
  modules: {
    AuthStore, GamesStore
  }
})
