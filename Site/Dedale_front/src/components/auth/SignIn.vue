<template>
  <div class="ui container">
    <form class="ui large form">
      <div class="ui stacked segment">
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
        <button type="button" @click="signin" class="ui fluid large teal submit button">Login</button>
      </div>

      <div class="ui error message"></div>

    </form>
  </div>
</template>
<script>
  export default {
    data() {
      return {
        email: '',
        password: ''
      }
    },
    methods: {
        signin() {
            var data = {
                client_id: 2,
                client_secret: 'M8crlyewOhrjDYdxuCodmmNHaASPl0JM7qgj197o',
                grant_type: 'password',
                username: this.email,
                password: this.password
            }

            this.$http.post('oauth/token', data)
                .then(res => {
                    this.$auth.setToken(res.body.access_token, res.body.expires_in + Date.now())
                    this.$router.push('/feed')
                })
        }
    }
  }
</script>
