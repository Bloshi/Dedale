<template>
  <div class="ui secondary  menu">
    <router-link class="item" to='/feed' v-if="isAuth">Feed</router-link>
    <div class="right menu">
      <div class="item">
        <div class="ui icon input">
          <input type="text" placeholder="Search..." />
          <i class="search link icon"></i>
        </div><!-- .ui.icon.input -->
      </div><!-- .item -->

      <router-link class="item" to='/connection' v-if="!isAuth">Se connecter</router-link>
      <router-link class="item" to='/enregistrement' v-if="!isAuth">S'enregistrer</router-link>
      <router-link class="item" v-if="isAuth">Logout</router-link>
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
    }
  }
</script>

<style></style>
