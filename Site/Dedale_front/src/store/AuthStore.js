import Vue from 'vue'

const state = {
  isAuth: null
}

const mutations = {
  SET_AUTH(state, isAuthenticated) {
    state.isAuth = isAuthenticated
  }
}

const actions = {
  setAuthenticatedUser: ({commit}) => {
    return Vue.http.get('api/user')
      .then(res => {
        Vue.auth.setAuthenticatedUser(res.body)
        commit('SET_AUTH', Vue.auth.isAuthenticated())
      })
  }
}

export default {
  state, mutations, actions
}
