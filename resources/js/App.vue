<template>
  <div>
      <!-- Header -->
      <Header />

      <!-- main -->
     <Main
     :posts="posts"
      />

      <!-- Footer -->
      <Footer />
  </div>
</template>

<script>

import axios from 'axios';
import Header from './components/Header.vue';
import Main from './components/Main.vue';
import Footer from './components/Footer.vue';



export default {
    name:'App',
    components:{
        Header,
        Main,
        Footer,
    },
    data(){

        return {
            posts:[],
        }
    },
    created(){
      this.getPosts();
    },
    methods:{

        getPosts(){
            // Get posts from api

            axios.get('http://127.0.0.1:8000/api/posts')
                     .then(res => {
                         this.posts = res.data;
                     })
                     .catch( err => {
                         console.log(err);
                     })
        }
    },
}
</script>

<style lang="scss">
@import'~bootstrap/dist/css/bootstrap.css';

</style>