<template>
  <div class="ui secondary pointing menu">
    <router-link class="item" to='/'>Home</router-link>
    <router-link class="item" to='/feed' :value="isAuth">Feed</router-link>

    <div class="right menu">
      <div class="item" :value="isAuth">
        <div class="ui transparent icon input">
          <input type="text" placeholder="Recherche" />
          <i class="search link icon"></i>
        </div>
      </div><!-- .item -->

      <router-link class="item" to='/connection' :value="!isAuth">Se connecter</router-link>
      <router-link class="item" to='/enregistrement' :value="!isAuth">S'enregistrer</router-link>

      <div class="ui right dropdown item" :value="isAuth">
        <i class="user circle outline"></i>
        <i class="dropdown icon"></i>
        <div class="menu">
          <router-link class="item" to='/profil'>Profil</router-link>
          <router-link class="item" to='/games/create'>Créer un jeu</router-link>
          <router-link class="item" to='/logout'>Logout</router-link>
        </div>
      </div>
    </div><!-- .right.menu -->
  </div><!-- .ui.secondary.menu -->
</template>

<script>
  import { mapState } from 'vuex'

  export default {
    computed: {
      ...mapState({
        isAuth: state => state.isAuth
      })
    },
    created () {
      this.$store.dispatch('setAuthenticatedUser')
    },
    mounted() {
      this.$nextTick(() => {
        jQuery('.ui.dropdown').dropdown()
      })
    }
  }
</script>

<style lang='scss'>
  .ui {
    .secondary.pointing.menu { margin-bottom: 40px; margin-top: 10px; }
    .transparent.icon.input { margin-bottom: -1px !important; }
  }
</style>

