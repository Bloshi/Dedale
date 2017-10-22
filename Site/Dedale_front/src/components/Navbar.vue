<template>
  <div class="ui secondary pointing menu">
    <router-link class="item" to='/'>Home</router-link>
    <router-link class="item" to='/feed' v-if="isAuth">Feed</router-link>

    <div class="right menu">
      <div class="item" v-if="isAuth">
        <div class="ui transparent icon input">
          <input type="text" placeholder="Recherche" />
          <i class="search link icon"></i>
        </div>
      </div><!-- .item -->

      <router-link class="item" to='/connection' v-if="!isAuth">Se connecter</router-link>
      <router-link class="item" to='/enregistrement' v-if="!isAuth">S'enregistrer</router-link>

      <div class="ui right dropdown item" v-if="isAuth">
        <i class="user circle outline"></i>
        <i class="dropdown icon"></i>
        <div class="menu">
          <router-link class="item" to='/profil'>Profil</router-link>
          <router-link class="item" to='/games/create'>Créer un jeu</router-link>
          <a href="#" class="item" @click="logout">Se déconnecter</a>
        </div>
      </div>
    </div><!-- .right.menu -->
  </div><!-- .ui.secondary.menu -->
</template>

<script>
  import { mapGetters } from 'vuex'

  export default {
    computed: {
      ...mapGetters(['isAuth'])
    },
    methods: {
      logout () {
        this.$store.dispatch('logout').then( () => { this.$route.push('/connection') })
      }
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

