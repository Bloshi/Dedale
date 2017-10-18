<template>
  <div class="ui container">
    <form class="ui large form">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" v-model="pseudo" placeholder="Pseudo">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" v-model="email" placeholder="E-mail address">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" v-model="password" placeholder="Password">
          </div>
        </div>
        <div class="ui fluid large teal submit button">Register</div>
        <small>Vous avez déjà un compte ? <router-link to="/connection">Se connecter</router-link></small>
      </div>

      <div class="ui error message"></div>

    </form>
  </div>
</template>
<script>
  export default {
    data() {
      return {
        pseudo: '',
        email: '',
        password: ''
      }
    }
  }
</script>
