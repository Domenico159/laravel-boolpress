<template>
  <div>
      <!-- Header -->
      <Header />

      <!-- main -->
     <Main
     :posts="posts"
     :page="page"
     @clickBtn="getPage"
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
            page:{},
        }
    },
    created(){
      this.getPosts();
    },
    methods:{

        getPosts(page){
            // Get posts from api

            axios.get(`http://127.0.0.1:8000/api/posts?page=${page}`)
                     .then(res => {
                         this.posts = res.data.data;
                         this.page = {
                             first:res.data.current_page,
                             last:res.data.last_page,
                         };
                     })
                     .catch( err => {
                         console.log(err);
                     })
        },
        getPage(e){
            
            if(e == 'prev'){
                this.getPosts(this.page.first - 1) ;
            }else if (e == 'next'){
                this.getPosts(this.page.first + 1);
            }else {
                 this.getPosts(e)
            }

        }
    },
}
</script>

<style lang="scss">
@import'~bootstrap/dist/css/bootstrap.css';

</style>