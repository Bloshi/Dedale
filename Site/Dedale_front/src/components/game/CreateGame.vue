<template>
  <div>

    <form class="ui form">
      <h4 class="ui dividing header">Ajouter un jeu</h4>
      <div class="field">
        <label for="title_game">Nom</label>
        <input id="title_game" type="text" v-model="name" placeholder="Jeu de l'oie">
      </div><!-- .field -->

      <div class="field">
        <div class="ui sub header">Search Selection</div>
        <div class="ui fluid multiple search normal selection dropdown">
          <input type="hidden">
          <i class="dropdown icon"></i>
          <div class="default text">Sélectionnez un tag</div>
          <div class="menu">
            <div class="item" data-value="af"><i class="af flag"></i>Afghanistan</div>
            <div class="item" data-value="ax"><i class="ax flag"></i>Aland Islands</div>
            <div class="item" data-value="al"><i class="al flag"></i>Albania</div>
            <div class="item" data-value="dz"><i class="dz flag"></i>Algeria</div>
            <div class="item" data-value="as"><i class="as flag"></i>American Samoa</div>
            <div class="item" data-value="ad"><i class="ad flag"></i>Andorra</div>
          </div>
        </div>
      </div><!-- .field -->

      <div class="field">
        <div class="ui toggle checkbox">
          <input type="checkbox">
          <label>Vous n'avez pas trouvez de tags pour votre jeu ? Proposez en un</label>
        </div>
      </div>

      <div class="field">
        <label for="descr_game">Description du jeu</label>
        <textarea id="descr_game" v-model='description'></textarea>
      </div><!-- .field -->

      <input type="hidden" v-model="note" value='0' />

      <div class="ui button" tabindex="0">Ajouter le jeu</div>
    </form>

  </div>
</template>

<script>
  export default {
    data () {
      return {
        name: '',
        description: '',
        note: 0
      }
    },
    mounted () {
      this.$nextTick(() => {
        $('.ui.dropdown')
          .dropdown({
            useLabels: false
          })
      })
    }
  }
</script>
