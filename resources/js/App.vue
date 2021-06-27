<template>
  <div>
      <!-- Header -->
      <Header />

      <!-- main -->
        <main class="pt-5">

              <!-- component matched by the route will render here -->
                <router-view></router-view>

        </main>
      <!-- Footer -->
      <Footer />
  </div>
</template>

<script>
import Header from './components/Header.vue';




export default {
    name:'App',
    components:{
        Header,
    },
}
</script>

<style lang="scss">
@import'~bootstrap/dist/css/bootstrap.css';

</style>