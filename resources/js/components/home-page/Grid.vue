<template>
    <div class="products">
 <div v-if="!load">
         <div v-for="i in data" :key="i.id" class="container">
            <img id="main" :src="'/storage/'+i.img" alt="">
            <div class="text">{{i.description.length > 15 ? i.description.slice(0,15)+'...' : i.description+'...'}}</div>
           <button @click="$router.push('/product/'+i.id.toString())"><img id="arrow" src="../../assets/Arrow.svg" alt=""></button>
        </div>
</div>
<div v-if="load" class="loader">Loading...</div>    
    </div>
</template>

<script>
export default {
    data:()=>({
       data:null,
    }),
    computed:{
      load(){
        let res = this.data ? false : true
        return res
      }
    },
    mounted(){
       
    },
    created(){

       axios.get('api/products')
       .then(response=>{
           this.data = response.data
           })
    }
}
</script>


<style scoped>
#main{
width:350px;
height: 300px;
}


.loader,
.loader:before,
.loader:after {
  background: #34495e;
  -webkit-animation: load1 1s infinite ease-in-out;
  animation: load1 1s infinite ease-in-out;
  width: 1em;
  height: 4em;
}
.loader {
  color: #34495e;
  text-indent: -9999em;
  margin: 88px auto;
  position: relative;
  font-size: 11px;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-animation-delay: -0.16s;
  animation-delay: -0.16s;
}
.loader:before,
.loader:after {
  position: absolute;
  top: 0;
  content: '';
}
.loader:before {
  left: -1.5em;
  -webkit-animation-delay: -0.32s;
  animation-delay: -0.32s;
}
.loader:after {
  left: 1.5em;
}
@-webkit-keyframes load1 {
  0%,
  80%,
  100% {
    box-shadow: 0 0;
    height: 4em;
  }
  40% {
    box-shadow: 0 -2em;
    height: 5em;
  }
}
@keyframes load1 {
  0%,
  80%,
  100% {
    box-shadow: 0 0;
    height: 4em;
  }
  40% {
    box-shadow: 0 -2em;
    height: 5em;
  }
}


button{
    transition: all .9s ease;
}
button:hover{
    background: rgb(207, 5, 5);
}
*{
    flex-wrap: wrap;
    box-sizing: border-box;
}
.products{
    text-align: center;
    margin: 10px 10px;
    display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
  grid-auto-rows: minmax(100px, auto);
}
.container{
background: #F4F4F4;
width: 100%;
}
button{
    outline: none;
    border-radius: 2px;
    background: #D7B399;
    width: 100%;
    height: 30px;
    border: 0;
    cursor: pointer;
}
#arrow{
   transition: all 2s ease;
}
.text{
       
font-family: Montserrat;
font-style: normal;
font-weight: bold;
}

@media screen and (max-width:1100px){
    .products{
          margin: 10px 50px;
    }
}

@media screen and (max-width:910px){
    .products{
          margin: 10px 50px;
          display: flex;
          flex-direction: column;

    }
    .container{
        margin: 20px 0;
    }
    #main{
        width: 100%;
        height: 100%;
    }
}

@media screen and (max-width:576px){
    .products{
          margin: 10px 15px;
          display: flex;
          flex-direction: column;

    }
        .container{
        margin: 20px 0;
    }
}
</style>