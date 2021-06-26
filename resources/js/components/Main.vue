<template>

  <main>

      <div class="container">
          <div class="row mt-5">
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
               @click="$emit('clickBtn', 'prev')"
              >
                  Prev
              </button>

              <button @click="$emit('clickBtn', i)"
              class="btn btn-primary mr-2"
              v-for="i in page.last"
              :key="i"
              >
              {{ i }}
              </button>

              <button
              v-show="page.first < page.last"
              class="btn btn-primary"
               @click="$emit('clickBtn', 'next')"
              >
                  Next
              </button>
          </div>

      </div>
     
  </main>

</template>

<script>
export default { 
    name:'Main',
    props:['posts' , 'page'],
}
</script>

<style scoped lang="scss">
main{
    min-height: calc(100vh - 110px);
    
    .card{
        cursor: pointer;
        transition: border ease-in-out 0.3s;
        box-sizing: border-box;

        &:hover {
            border-left: 10px inset rgb(23, 210, 235);
            border-bottom: 10px inset rgb(23, 210, 235);
        }
    } 
}
</style>