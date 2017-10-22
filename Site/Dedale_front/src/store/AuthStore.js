import Vue from 'vue'

const state = {
  isAuth: null
}

const getters = {
  isAuth: state => state.isAuth
}

const mutations = {
  SET_AUTH (state, isAuthenticated) {
    state.isAuth = isAuthenticated
  },
  LOGOUT (state) {
    state.isAuth = null
  }
}

const actions = {
  setSignInUser: ({ commit }, userInfo) => {
    let data = {
      client_id: 2,
      client_secret: 'A2boUTI4mgaIIBE3tc8q6S5xDhGuFzkqf0QLIs6w',
      grant_type: 'password',
      username: userInfo.email,
      password: userInfo.password
    }
    Vue.http.post('oauth/token', data)
      .then(res => {
        Vue.auth.setToken(res.body.access_token, res.body.expires_in + Date.now())
        commit('SET_AUTH', Vue.auth.isAuthenticated())
      })
  },
  setAuthenticatedUser: ({commit}) => {
    return Vue.http.get('api/user')
      .then(res => {
        Vue.auth.setAuthenticatedUser(res.body)
        commit('SET_AUTH', Vue.auth.isAuthenticated())
      })
  },
  logout: ({ commit }) => { commit('LOGOUT') }
}

export default {
  state, getters, mutations, actions
}
