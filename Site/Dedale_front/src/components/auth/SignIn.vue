<template>
  <div class="ui container">
    <div class="ui attached message">
      <div class="header">
        Bienvenue sur <b>PlayPal</b>
      </div>
      <p>Remplisser le formulaire pour vous connecter</p>
    </div>
    <form class="ui form attached fluid segment" @submit.prevent="signin">
      <div class="field">
        <div class="ui left icon input">
          <i class="user icon"></i>
          <input type="text" v-model="email" placeholder="E-mail address" autofocus />
        </div>
      </div>
      <div class="field">
        <div class="ui left icon input">
          <i class="lock icon"></i>
          <input type="password" v-model="password" placeholder="Password" />
        </div>
      </div>
      <button type="submit" class="ui fluid large teal submit button">Login</button>
    </form>
    <div class="ui bottom attached warning message">
      <i class="icon help"></i>
      Vous n'avez pas encore de compte ? <router-link to="/enregistrement">S'enregistrer</router-link>
    </div>
  </div>
</template>
<script>
  import { mapGetters } from 'vuex'

  export default {
    data() {
      return {
        email: '',
        password: ''
      }
    },
    methods: {
      signin () {
        this.$store.dispatch('setSignInUser', {
          email: this.email,
          password: this.password
        }).then( () => {
          this.$router.push("/feed")
        })
      }
    }
  }
</script>
