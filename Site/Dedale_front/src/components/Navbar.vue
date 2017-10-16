<template>
  <div class="ui secondary pointing menu">
    <router-link class="item" to='/feed' v-if="isAuth">Feed</router-link>
    <div class="right menu">
      <div class="item">
        <div class="ui category search">
          <div class="ui icon input">
            <input class="prompt" type="text" placeholder="Search animals...">
            <i class="search icon"></i>
          </div>
          <div class="results"></div>
        </div>
      </div><!-- .item -->

      <router-link class="item" to='/connection' v-if="!isAuth">Se connecter</router-link>
      <router-link class="item" to='/enregistrement' v-if="!isAuth">S'enregistrer</router-link>
      <router-link class="item" to='/logout' v-if="isAuth">Logout</router-link>
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
