<template>
  <div class="ui secondary pointing menu">
    <router-link class="item" to='/feed' v-if="isAuth">Feed</router-link>
    <router-link class="item" to='/games/create' v-if="isAuth">Créer un jeu</router-link>
    <div class="right menu">
      <div class="item">
        <div class="ui transparent icon input">
          <input type="text" placeholder="Recherche">
          <i class="search link icon"></i>
        </div>
      </div><!-- .item -->

      <router-link class="item" to='/connection' v-if="!isAuth">Se connecter</router-link>
      <router-link class="item" to='/enregistrement' v-if="!isAuth">S'enregistrer</router-link>

      <div class="ui right dropdown item" v-if="isAuth">
        <i class="user circle outline"></i>
        <i class="dropdown icon"></i>
        <div class="menu">
          <router-link class="item" to='/'>Profil</router-link>
          <router-link class="item" to='/'>Ajouter jeu</router-link>
          <router-link class="item" to='/logout'>Logout</router-link>
        </div>
      </div>
    </div><!-- .right.menu -->
  </div><!-- .ui.secondary.menu -->
</template>

<script>
  export default {
    data () {
      return {
        isAuth: null
      }
    },
    created () {
      this.isAuth = this.$auth.isAuthenticated()
      this.setAuthenticatedUser()
    },
    methods: {
      setAuthenticatedUser () {
        this.$http.get('api/user')
            .then(res => {
              this.$auth.setAuthenticatedUser(res.body)
              console.log(this.$auth.getAuthenticatedUser())
            })
      }
    }
  }
</script>

<style lang='scss'>
  .ui.secondary.pointing.menu { margin-bottom: 40px; margin-top: 10px; }
</style>

