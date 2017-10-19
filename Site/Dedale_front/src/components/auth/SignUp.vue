<template>
  <div class="ui container">
    <div class="ui attached message">
      <div class="header">
        Bienvenue sur <b>PlayPal</b>
      </div>
      <p>Remplisser le formulaire pour vous enregeristrer</p>
    </div>
    <form class="ui form attached fluid segment">
      <div class="field">
        <div class="ui left icon input">
          <i class="user icon"></i>
          <input type="text" v-model="pseudo" placeholder="Pseudo" autofocus>
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
    </form>
    <div class="ui bottom attached warning message">
      <i class="icon help"></i>
      Pas encore de compte ? <router-link to="/enregistrement">S'enregistrer ici</router-link>
    </div>
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
