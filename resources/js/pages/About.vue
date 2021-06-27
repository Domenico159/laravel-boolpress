<template>
  <div class="container">
      <h1 class="mb-5">About</h1>
      <p> <b>1.</b> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus sunt laboriosam corrupti quaerat reiciendis quas dignissimos expedita, ratione quia saepe illum quo at repellendus. Numquam cupiditate ut nisi recusandae eveniet.</p>
      <p> <b>2.</b> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus sunt laboriosam corrupti quaerat reiciendis quas dignissimos expedita, ratione quia saepe illum quo at repellendus. Numquam cupiditate ut nisi recusandae eveniet.</p>
      <p> <b>3.</b> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus sunt laboriosam corrupti quaerat reiciendis quas dignissimos expedita, ratione quia saepe illum quo at repellendus. Numquam cupiditate ut nisi recusandae eveniet.</p>
      <p> <b>4.</b> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus sunt laboriosam corrupti quaerat reiciendis quas dignissimos expedita, ratione quia saepe illum quo at repellendus. Numquam cupiditate ut nisi recusandae eveniet.</p>
      <p> <b>5.</b> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus sunt laboriosam corrupti quaerat reiciendis quas dignissimos expedita, ratione quia saepe illum quo at repellendus. Numquam cupiditate ut nisi recusandae eveniet.</p>
      <p> <b>6.</b> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus sunt laboriosam corrupti quaerat reiciendis quas dignissimos expedita, ratione quia saepe illum quo at repellendus. Numquam cupiditate ut nisi recusandae eveniet.</p>
  </div>
</template>

<script>
export default {
    name:'About',
}
</script>

<style scoped lang="scss">

h1{
   
   opacity: 0;
   transform: translateY(-100px);
   transition: opacity 0.3s , transform 0.3s;
   animation: h1-in 0.8s forwards;


   @keyframes h1-in {
     0%{
        opacity: 0;
        transform: translateY(-100px);
     }
     100%{
        opacity: 1;
        transform: translateY(0px);
     }
   }
}


p{
   opacity: 0;
   transform: translateX(-100px);

   &:nth-child(2){
     animation: p-in 0.5s forwards;
     animation-delay: 0.5s;
   }
   &:nth-child(3){
     animation: p-in 0.5s forwards;
     animation-delay: 1s;
   }
   &:nth-child(4){
     animation: p-in 0.5s forwards;
     animation-delay: 1.5s;
   }
   &:nth-child(5){
     animation: p-in 0.5s forwards;
     animation-delay: 2s;
   }
   &:nth-child(6){
     animation: p-in 0.5s forwards;
     animation-delay: 2.5s;
   }
   &:nth-child(7){
     animation: p-in 0.5s forwards;
     animation-delay: 3s;
   }

   @keyframes p-in {
     0%{
        opacity: 0;
        transform: translateX(-150px);
     }

     100%{
       opacity: 1;
        transform: translateX(0px);
     }
   }
}

</style>