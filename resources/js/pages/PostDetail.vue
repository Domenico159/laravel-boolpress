<template>
  <div class="container">

     <div class="d-flex">
         <div class="box-img mr-4">
         <img  :src="`${ post.img}`" alt="">
     </div>

     <div class="box-test">
         <h1>{{post.title}}</h1>
         <h5>{{post.content}}</h5>
         <h5>{{ formatDate(post.created_at) }}</h5>
     </div>
     </div>

     <router-link class="btn btn-primary mt-5 ml-2" :to="{name:'home'}">Back</router-link>

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
        },
        formatDate(date) {
      const postDate = new Date(date);
      let day = postDate.getDate();
      let month = postDate.getMonth() + 1;
      const year = postDate.getFullYear();
      if (day < 10) {
        day = "0" + day;
      }
      if (month < 10) {
        month = "0" + month;
      }
      return `${day}/${month}/${year}`;
    },
    }
}
</script>

<style scoped lang="scss">

.btn{
     opacity: 0;
    transform: translateX(-80px);
    transition: opacity 0.3 , transform 0.3s;
    animation: effect-in 1s forwards;
    animation-delay: 0.5s;
}

.box-img {

    opacity: 0;
    transform: translateX(-80px);
    transition: opacity 0.3 , transform 0.3s;
    animation: effect-in 1s forwards ;

    }

    @keyframes effect-in { 
        0%{
            opacity: 0;
            transform: translateX(-200px);
        }
        100%{
            opacity: 1;
             transform: translateX(0);
        }
}

.box-test{

    h5{
        opacity: 0;
        transform: translateY(-80px);
        animation: effect-in-h5 1s forwards ;
    }

      @keyframes effect-in-h5 { 
        0%{
            opacity: 0;
            transform: translateY(100px);
        }
        100%{
            opacity: 1;
             transform: translateY(0);
        }
}





    h1{
        opacity: 0;
        transform: translateY(-80px);
        animation: effect-in-h1 1s forwards ;
    }

      @keyframes effect-in-h1 { 
        0%{
            opacity: 0;
            transform: translateY(-80px);
        }
        100%{
            opacity: 1;
             transform: translateY(0);
        }
}



}

</style>