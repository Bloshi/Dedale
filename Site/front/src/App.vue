<template>
  <div id="app">
    <navbar></navbar>
    <sign-in></sign-in>  
  </div>
</template>

<script>
  import Navbar from '@/components/Navbar'
  import SignIn from '@/components/auth/SignIn'

  export default {
    components: {
      'navbar': Navbar,
      'sign-in': SignIn
    }
  }
</script>

<style></style>
