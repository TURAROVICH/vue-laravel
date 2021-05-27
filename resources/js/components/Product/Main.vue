<template>
<div>
    <div v-if="!loader" class="main">
        <div class="nav">
       <div class="title">
           {{data.name}}
       </div>

       <div class="discount">
           СКИДКИ ДО 90%
       </div>

       <button @click="show = !show">
           купить
       </button>
        </div>

                         <div class="description">
         {{data.description}}
     </div>

        <div class="boots">
                <img id="product-photo" :src="'/storage/'+data.img" alt="">
        </div>
       
        <div class="price">
           <div class="old-price">{{data.o_price}}руб.</div>
           <div class="discount-with">{{data.c_price}}руб.</div>
        </div>


    </div>

<div v-if="loader" class="loader">Loading...</div>

<div class="fixed-modal" v-if="show">
         <Modal @close="show=false"/>
</div>

</div>
</template>

<script>
import Modal from './Modal'
export default {
    data:()=>({
         show:false,
         data:null,
    }),
   components:{
       Modal
   },
   computed:{
     lodaer(){
        let res = this.data ? true : false
        return res
     }
   },
   mounted(){
  
   },
   created(){
       const form = new FormData()
       form.append('id',this.$route.params.id)
       axios.post('/api/product',form)
       .then(r=>{
           this.data = r.data
       })
       .catch(e=>console.log(e))
   }
}
</script>

<style scoped>

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



.fixed-modal{
    position: fixed;
    width: 100%;
    height: 100vh;
    top: 0;
    z-index:999;
}
button{
    transition: all .9s ease;
}
button:hover{
    background: rgb(207, 5, 5);
}
*{
    box-sizing: border-box;
    background-size: contain;
}
.description{
    
font-family: Montserrat;
font-style: normal;
font-weight: bold;
font-size: 16px;
line-height: 29px;
text-align: center;
letter-spacing:0em;

}
.old-price{
    
font-family: Montserrat;
font-style: normal;
font-weight: bold;
font-size: 24px;
line-height: 29px;
text-align: right;
letter-spacing: 0.05em;
text-decoration-line: line-through;
text-transform: uppercase;

color: #000000;
}
.discount-with{
    font-family: Montserrat;
font-style: normal;
font-weight: bold;
font-size: 42px;
line-height: 51px;
text-align: right;
letter-spacing: 0.02em;
text-transform: uppercase;

color: #D84033;
}
.nav div{
    margin:  20px 0;
}
.nav{
    display: flex;
    justify-content: left;
    align-items:flex-start;
    flex-direction: column;
    text-align: justify;
}
.title{
    
font-family: Montserrat;
font-style: normal;
font-weight: normal;
font-size: 30px;
line-height: 37px;
letter-spacing: 0.02em;

color: #000000;

}
.discount{
 white-space: nowrap;   
font-family: Montserrat;
font-style: normal;
font-weight: bold;
font-size: 55px;
line-height: 67px;
letter-spacing: 0.04em;

color: #000000;

}
.main{
    margin: 50px;
    display: flex;
}
button{
    width: 240px;
height: 55px;
background: #D7B399;
border-radius: 5px;
outline: none;
border:0;
cursor: pointer;
font-family: Montserrat;
font-style: normal;
font-weight: normal;
font-size: 16px;
line-height: 20px;
/* identical to box height */

letter-spacing: 0.03em;

color: #FFFFFF;
}

@media screen and (max-width:1150px){
    .discount{
        font-size: 45px;
    }
    #product-photo{
        width: 400px;
    }
}

@media screen and (max-width:1079px){
    .discount{
        font-size: 35px;
    }
    #product-photo{
        width: 350px;
    }
    .title{
        font-size: 25px;
    }
}



@media screen and (max-width:939px){
    .discount{
        font-size: 30px;
        letter-spacing: 0.01rem;
    }
    #product-photo{
        width: 300px;
    }
    .title{
        font-size: 20px;
        letter-spacing: 0.01rem;
    }
   
}



@media screen and (max-width:836px){
    .discount{
        font-size: 40px;
        letter-spacing: 0.01rem;
    }
    #product-photo{
        width: 500px;
    }
    .title{
        font-size: 30px;
        letter-spacing: 0.01rem;
    }
     .main{
        flex-direction: column-reverse;
        align-items: center;
        justify-content: center;
        text-align: center;
     
    }
    .old-price{
        font-size: 30px;
        margin-left: 30px;
    }
}

@media screen and (max-width:521px){
        #product-photo{
    width: 350px;
        }
}
</style>