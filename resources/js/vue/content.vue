<script>
  export default {
      data() {
        return {
          cargo:
          {
            weight: 0,
            cbm: 0,
            long:0,
            width:0,
            height:0,
          },
      }
    },
      methods: {
        calculateCbm(long,width,height){
          
          var cbm = long*width*height
          var chargeable = cbm/166.67
          this.chargeable.push(cargo)

        }
      }
    }
</script>
    

<template>
    
    <form @submit="calculateCbm(long,width,height)">
        <input v-model="long">
        <input v-model="width">
        <input v-model="height">
        <button>calculate</button>    
    </form>

</template>