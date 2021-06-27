<template>
  <div class="container d-flex">

     <div class="box-img mr-4">
         <img  :src="`${ post.img}`" alt="">
     </div>

     <div class="box-test">
         <h1>{{post.title}}</h1>
         <h5>{{post.content}}</h5>
     </div>

  </div>
</template>

<script>
import axios from 'axios';
export default {
    name:'PostDetail',
    data(){
        return {
            post: '',
        }
    },
    created(){

        this.getPostDetail();
    },
    methods: {

        getPostDetail(){

            axios.get(`http://127.0.0.1:8000/api/posts/${this.$route.params.slug}`)
            .then(res => {

                this.post = res.data ;

            })
            .catch( err => {

                console.log(err);
            });
        }
    }
}
</script>

<style>

</style>