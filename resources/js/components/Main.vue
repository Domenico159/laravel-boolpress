<template>

  <main>

      <div class="container">
          <div class="row">
              <div v-for="post in posts" :key="post.id"
              class="card-deck m-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" :src="`${ post.img}`" :alt="`${ post.img}`">
                        <div class="card-body">
                            <h3 class="card-title"> {{ post.title }} </h3>
                            <p class="card-text"> {{ post.content }} </p>
                        </div>
                    </div>
                </div>
          </div>
      </div>
     
  </main>

</template>

<script>
export default { 
    name:'Main',
    props:['posts'],
}
</script>

<style scoped lang="scss">
main{
    min-height: calc(100vh - 110px);
}
</style>