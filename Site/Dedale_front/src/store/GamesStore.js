import Vue from 'vue'

const state = {
  games: []
}

const mutations = {
  SET_ALL_GAMES (state, resBody) {
    state.games = resBody
  },
  DELETE_GAMES (state, game) {
    let index = state.games.indexOf(game)
    state.games.splice(index, 1)
  }
}

const actions = {
  getGames: ({ commit }) => {
    Vue.http.get('api/games')
      .then(res => {
        commit('SET_ALL_GAMES', res.body)
      })
  },
  deleteGames: ({ commit }, game) => {
    Vue.http.delete('api/games/' + game.id)
      .then(res => {
        commit('DELETE_GAMES', game)
      })
  }
}

export default {
  state, mutations, actions
}
