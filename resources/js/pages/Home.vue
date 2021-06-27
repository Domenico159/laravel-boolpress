<template>

  <main>

      <div class="container">
          <h1 class="text-center">Your posts</h1>
          <div class="row mt-3">
              <div v-for="post in posts" :key="post.id"
              class="card-deck mb-5 col-md-4">
                    <div class="card">
                        <img class="card-img-top" :src="`${ post.img}`" :alt="`${ post.img}`">
                        <div class="card-body">
                            <h3 class="card-title"> {{ post.title }} </h3>
                            <p class="card-text"> {{ post.content }} </p>
                        </div>
                    </div>
                </div>
          </div>

          <div class="pagination d-flex justify-content-center">
              <button 
              v-show="page.first > 1"
              class="btn btn-primary mr-2"
               @click="getPage('prev')"
              >
                  Prev
              </button>

              <button @click="getPage(i)"
              :class="{'btn-primary' : i == page.first}"
              class="btn btn-number  mr-2"
              v-for="i in page.last"
              :key="i"
              >
              {{ i }}
              </button>

              <button
              v-show="page.first < page.last"
              class="btn btn-primary"
               @click="getPage('next')"
              >
                  Next
              </button>
          </div>

      </div>
     
  </main>

</template>

<script>
import axios from 'axios';
export default { 
    name:'Home',
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

<style scoped lang="scss">
main{
    min-height: calc(100vh - 110px);
    
    .card{
        transition: border ease-in-out 0.3s;
        opacity: 0;
        transform: scale(0.1);
        animation: card-effect 0.8s forwards;
        @keyframes card-effect {
            
            0%{
                opacity: 0;
                transform: scale(0.1);
            }
            100%{
                opacity: 1;
                transform: scale(1.0);
            }
        }
        &:hover {
            border-left: 10px inset rgb(23, 210, 235);
            border-bottom: 10px inset rgb(23, 210, 235);
        }
    } 
    .pagination{
        .btn-number{
            box-shadow: 0px 0px 5px #007bff;
        }
    }
}
</style>