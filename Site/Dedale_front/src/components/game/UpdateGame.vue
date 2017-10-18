<template>
  <div>

    <form class="ui form">
      <h4 class="ui dividing header">Editer le jeu /nom du jeu/</h4>
      <div class="field">
        <label for="title_game">Nom</label>
        <input id="title_game" type="text" v-model="game.name" placeholder="Jeu de l'oie">
      </div><!-- .field -->

      <div class="field">
        <div v-for="DropTag in DropTags" class="item" :data-value='DropTag.icon'>
          <i :class="DropTag.icon"></i>{{ DropTag.name }}
        </div>
      </div><!-- .field -->

      <div class="field">
        <div class="ui fluid multiple search selection dropdown">
          <input type="hidden" name="country">
          <i class="dropdown icon"></i>
          <div class="default text">Ajouter un tag</div>
          <div class="menu">
            <div v-for="DropTag in DropTags" class="item" :data-value='DropTag.icon'>
              <i :class="DropTag.icon"></i>{{ DropTag.name }}
            </div>
          </div>
        </div>
      </div><!-- .field -->

      <div class="field">
        <label for="descr_game">Description du jeu</label>
        <textarea id="descr_game" v-model='game.description'></textarea>
      </div><!-- .field -->

      <input type="hidden" v-model="game.note" value='0' />

      <button class="ui primary button" tabindex="0" v-show="game.name && game.description" @click="update" type='button'>Editer</button>
    </form>

  </div>
</template>

<script>
  import swal from 'sweetalert';

  export default {
    created () {
      this.getGame()
    },
    data() {
      return {
        game: {},
        DropTags: [
          { value: 'af', icon: 'af flag', name: 'Afghanistan' },
          { value: 'tj', icon: 'tj flag', name: 'Tajikistan' },
          { value: 'tz', icon: 'tz flag', name: 'Tanzania' }
        ],
      }
    },
    methods: {
      getGame () {
        this.$http.get(`api/games/${ this.$route.params.game }`)
            .then(res => {
              this.game = res.body
            })
      },
      update() {
        this.$http.put(`api/games/${this.$route.params.game}`, this.game)
          .then(res => {
            swal("Bien Joué!", "L'article a bien été mis à jour!", "success");
          })
      }
    },
    mounted() {
      this.$nextTick(() => {
        jQuery('.ui.dropdown').dropdown({ useLabels: true })
      })
    }
  }
</script>
