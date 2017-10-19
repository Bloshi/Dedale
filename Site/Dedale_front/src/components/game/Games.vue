<template>
  <ul id="list_article">
      <li v-for="game in games" class="ui card"
        :authenticatedUser="authenticatedUser"
      >
        <div class="content">
          {{ game.user_id }}
          {{ game.id }}
          <div class="right floated meta">14h</div>
          <img class="ui avatar image" src="/images/avatar/large/elliot.jpg"> Elliot
        </div>
        <div class="image">
          <img />
        </div>
        <div class="content">
          <h4>{{ game.name }}</h4>
          <p>{{ game.description }}</p>
          <span class="right floated">
            <i class="heart outline like icon"></i>
            17 likes
          </span>
          <i class="comment icon"></i>
          3 comments
        </div>
        <div class="extra content">
          <div class="ui large transparent left icon input">
            <i class="heart outline icon"></i>
            <input type="text" placeholder="Add Comment...">
          </div>
        </div>
        <div class="extra content" v-if="game.user_id == authenticatedUser.id">
          <a href="#" class="ui negative basic button"
            @click="deleteGame(game)"
          >Supprimer</a>
          <router-link :to="`/games/update/${ game.id }`" class="ui primary basic button right">Editer</router-link>
        </div>
      </li>
    </ul>
</template>
<script>
  import swal from 'sweetalert';

  export default {
    data () {
      return {
        games: []
      }
    },
    computed: {
      authenticatedUser () {
        return this.$auth.getAuthenticatedUser()
      }
    },
    created () {
      this.$http.get('api/games')
          .then(res => {
            this.games = res.body
          })
    },
    methods: {
      deleteGame (game) {
        console.log(game)
        swal({
          title: "Etes vous sûre ?",
          text: "Une foi supprimé vous ne pourrez pas retrouver votre article",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
          .then((willDelete) => {
            if (willDelete) {
              this.$http.delete('api/games/' + game.id)
                  .then(res => {
                    let index = this.games.indexOf(game)
                    this.games.splice(index, 1)

                    swal("Poof! Votre article a été supprimé!", {
                      icon: "success",
                    })
                  })
            } else {
              swal("Votre article est sauf!")
            }
          })
      }
    }
  }
</script>
<style lang='scss'>
  .feed_game ul#list_article { width: 100%; height: auto;
    column-count: 3; column-gap: 2px; column-fill: auto;
    column-width: 33.3333%; -webkit-padding-start: 0;
    &.ui.grid { margin: 0; }

    li { display: inline-block; margin: 1em;
      column-break-inside: avoid; opacity: 1;
      transition: all .2s ease; display: inline-block;
      width: calc(100% - 2em); height: auto;
    }
  }
</style>
