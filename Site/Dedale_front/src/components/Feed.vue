<template>
  <div class="feed_game">
    <ul class="filter ui three item menu">
      <li class="active item"><a href="#">filtre</a></li>
      <li class="item"><a href="#">filtre</a></li>
      <li class="item"><a href="#">filtre</a></li>
    </ul>

    <feed-games></feed-games>
  </div>
</template>
<script>
  import Games from '@/components/game/Games'

  export default {
    components: {
      'feed-games': Games
    }
  }
</script>

