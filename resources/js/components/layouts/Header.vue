<template>
    <header>
           <div class="nav">
               <ul>
                   <li>Для мужчин</li>
                   <li>Для женщин</li>
                   <li>Для детей </li>
               </ul>
           </div>

           <div @click="show" class="logo">
                      <ul>
                          <li> <img src="../../assets/Frame.svg" alt=""></li>
                          <li id="logo_text">the loop</li>
                      </ul>
           </div>

           <div class="form">
                 <ul>
                      <li @click="$router.push('/user')">Профиль</li>
                 </ul>
           </div>

           <div class="basket">
               <ul>
                   <li><img src="../../assets/Vector.png" alt=""></li>
               </ul>
           </div>


 <transition name="fade">
  <div v-if="menu" class="menu" >
     <div class="form-media">
                 <ul>
                
                 </ul>
           </div>



               <div class="nav-media">
               <ul>
                   <li>Для мужчин </li>
                   <li>Для женщин </li>
                   <li>Для детей  </li>
                   <li @click="$router.push('/user');menu=false">Профиль</li>
               </ul>
           </div>

                      <div class="basket-media">
               <ul>
                    <LI @click="$router.push('/');menu=false" style="cursor:pointer;">HOME</LI>
                   <li><img color="white" src="../../assets/Vector.png" alt=""></li>
               </ul>
           </div>


                        
    
      
  </div>
 </transition>


     </header> 
</template>



<script>
export default {
    data:()=>({
 menu:false,
 media:false
    }),
    methods:{
     show(){
         if(this.media){
                      this.menu = !this.menu
         }else{
             this.$router.push('/')
         }
     }
    },
    mounted(){
   this.media = window.matchMedia("(max-width: 904px)").matches
    }
}
</script>


<style scoped>

@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
/* animaion */

.nav-media ul{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}
.menu{
    font-size: 24px;
    flex-direction: column;
    display: flex;
    align-items: center;
    justify-content: center;
    padding-top: 300px;
    position: absolute;
    height: 185vh;
    width: 100%;
    background: rgba(0, 0, 0, 0.938);
    color: wheat;
    white-space: nowrap;
}
.fade-enter-active, .fade-leave-active {
  transition: all .5s ease;
}
.fade-enter, .fade-leave-to /* .fade-leave-active до версии 2.1.8 */ {
  opacity: 0;
  transform: translateX(-300px);
}
.nav ul li:hover{
    border-bottom: 1px solid #34495E;
}
.logo{
    cursor: pointer;
    z-index: 1001;
}
li{
    list-style: none;
    cursor: pointer;
}
header{
    box-shadow: 0px 5px 5px -5px rgba(34, 60, 80, 0.6);
    display: flex;
    position: fixed;
    width: 100%;
    height: 15vh;
    justify-content: space-between;
    align-content: center;
    align-items:center;
    /* width: 80%; */
    margin: 0;
    z-index: 1000;
    background:#fff;
}
.nav ul li{
    font-family: Montserrat;
font-style: normal;
font-weight: 500;
font-size: 14px;
line-height: 17px;
white-space: nowrap;
letter-spacing: 0.03em;

/* Black */

color: #212121;
}
 #logo_text{
    
font-family: Montserrat;
font-style: normal;
font-weight: bold;
font-size: 24px;
line-height: 29px;
letter-spacing: 0.05em;
text-transform: uppercase;

white-space: nowrap;
color: #212121;
}
.basket ul li{
    font-family: Montserrat;
font-style: normal;
font-weight: 500;
font-size: 14px;
line-height: 17px;
/* identical to box height */

letter-spacing: 0.03em;

/* Black */

color: #212121;
}
.form ul li{
    
font-family: Montserrat;
font-style: normal;
font-weight: 500;
font-size: 14px;
line-height: 17px;
/* identical to box height */

letter-spacing: 0.03em;

/* Black */

color: #212121;
}
 ul{
    display: flex;
    justify-content: space-between;
    align-items: center;

}
 li{
    margin: 0 5px;
}
@media screen and (max-width:945px) {
    header{
        margin: 0;
    }
}
@media screen and (max-width:904px){
    .nav{
        overflow: hidden;
        opacity: 0;
    }
    .basket{
          overflow: hidden;
        opacity: 0;   
    }
    .form{
             overflow: hidden;
        opacity: 0;
    }

   
}

</style>