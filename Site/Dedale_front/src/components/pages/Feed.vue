<template>
  <div class="feed_game">
    <ul class="filter">
      <li><a href="#">filtre</a></li>
      <li><a href="#">filtre</a></li>
      <li><a href="#">filtre</a></li>
    </ul>

    <ul class="ui grid">
      <li v-for="game in games" class="ui card sixteen wide column">
        <div class="content">
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
      </li>
    </ul>
  </div>
</template>
<script>
  export default {
    data () {
      return {
        games: []
      }
    },
    created () {
      this.$http.get('api/games')
          .then(res => {
            this.games = res.body
          })
    }
  }
</script>
<style lang='scss'>
  .feed_game ul { width: 100%; height: auto; }
</style>
