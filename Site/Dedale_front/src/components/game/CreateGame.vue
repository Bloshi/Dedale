<template>
  <div>

    <form class="ui form" @submit.prevent="create">
      <h4 class="ui dividing header">Ajouter un jeu</h4>
      <div :class="{'field error': errors.has('name'), 'field': !errors.has('name')}">
        <label for="title_game">Titre</label>
        <input id="title_game" type="text" placeholder="Jeu de l'oie"
          name="name" v-validate="'required'" v-model="game.name"
          autofocus
        />
        <span class="ui visible red mini message" v-show="errors.has('name')">
          {{ errors.first('name') }}
        </span>
      </div><!-- .field -->

      <div :class="{'field error': errors.has('description'), 'field': !errors.has('description')}">
        <label for="descr_game">Description du jeu</label>
        <textarea name='description' id="descr_game" v-model='game.description'
          v-validate="'required'"
        ></textarea>
        <span class="ui visible red mini message" v-show="errors.has('description')">
          {{ errors.first('description') }}
        </span>
      </div><!-- .field -->

      <div class="field">
        <label for="image_game" class="ui icon blue basic button">
          <i class="file icon"></i> Open File
        </label>
        <input id="image_game" type="file" placeholder="Jeu de l'oie"
          name="image" @change="imageChanged" style="display:none"
        />
      </div><!-- .field -->

      <div class="field">
        <div class="ui fluid multiple search selection dropdown">
          <input type="hidden" name="country">
          <i class="dropdown icon"></i>
          <div class="default text">Select Country</div>
          <div class="menu">
            <div v-for="DropTag in DropTags" class="item" :data-value='DropTag.icon'>
              <i :class="DropTag.icon"></i>{{ DropTag.name }}
            </div>
          </div>
        </div>
      </div><!-- .field -->

      <div class="field">
        <div class="ui checkbox">
          <input id='addtags_game' type="checkbox">
          <label for="addtags_game">Vous n'avez pas trouvez de tags pour votre jeu ? Proposez en un</label>
        </div>
      </div>

      <input type="hidden" v-model="game.note" value='0' />

      <button class="ui primary button" tabindex="0" type='submit'>Ajouter le jeu</button>
    </form>

  </div>
</template>

<script>
  export default {
    data () {
      return {
        game: {
          name: '',
          description: '',
          note: 0,
          image: ''
        },
        DropTags: [
          { value: 'af', icon: 'af flag', name: 'Afghanistan' },
          { value: 'tj', icon: 'tj flag', name: 'Tajikistan' },
          { value: 'tz', icon: 'tz flag', name: 'Tanzania' }
        ],
      }
    },
    methods: {
      imageChanged (e) {
        console.log(e.target.files[0])
        let fileReader = new FileReader()

        fileReader.readAsDataURL(e.target.files[0])

        fileReader.onload = (e) => {
          this.game.image = e.target.result
        }

        console.log(this.game)
      },
      create () {
        this.$validator.updateDictionary({
          'fr': {
            attributes: {
              name: 'nom'
            }
          }
        })
        this.$validator.setLocale('fr')

        this.$validator.validateAll().then( () => {
          this.$http.post('api/games', this.game)
            .then(res => {
              this.$router.push('/feed')
            })
        })
      }
    },
    mounted () {
      this.$nextTick(() => {
        jQuery('.ui.dropdown').dropdown({ useLabels: true })
      })
    }
  }
</script>
