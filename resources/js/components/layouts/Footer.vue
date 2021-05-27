<template>
<div class="main">
         <footer>
          <div class="text">
                        <ul>
                            <li> <img src="../../assets/Frame.svg" alt=""></li>
                            <li id="title-text">the loop</li>
                        </ul>

                        <div class="text-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, incidunt.
                        </div>
          </div>

          <div class="link">
                       <div class="title">Основные ссылки</div>
                       <ul  class="container-links">
                           <li class="links">О компании</li>
                           <li class="links">Каталог</li>
                           <li class="links">Доставка</li>
                           <li class="links">Оплата</li>
                       </ul>
          </div>

          <div class="categories">
                       <div class="title">Категории</div>
     <ul class="container-links">
                           <li class="links">Мужская одежда</li>
                           <li class="links">Женская одежда</li>
                           <li class="links">Детская одежда</li>
                           <li class="links">Для животных</li>
                       </ul>
          </div>

          <div class="social-network">
                       <div class="title">СОЦ СЕТИ</div>
     <ul class="container-links">
                           <li class="links"> <img src="../../assets/vk.svg" alt=""> VK.com</li>
                           <li class="links"><img src="../../assets/facebook.svg" alt=""> facebook</li>
                           <li class="links"><img src="../../assets/instagram.svg" alt=""> instagram</li>
                       </ul>
          </div>
     </footer>
<UnderFooter class="under-footer" />

     </div>
</template>

<script>
import  UnderFooter from './under-components/under-footer'
export default {
    components:{
        UnderFooter
    }
}
</script>




<style scoped>
.under-footer{

}
.links{
    font-family: Montserrat;
font-style: normal;
font-weight: normal;
font-size: 14px;
line-height: 22px;
/* identical to box height, or 157% */


color: #CBCFD4;
}
.title{
    
font-family: Montserrat;
font-style: normal;
font-weight: bold;
font-size: 10px;
line-height: 12px;
/* identical to box height */

display: flex;
align-items: center;
text-transform: uppercase;

color: #FFFFFF;

}
*{
    font-family: Montserrat;
color: #FFFFFF;

}
.text-body{
    width: 200px;
height: 88px;
font-family: Montserrat;
font-style: normal;
font-weight: normal;
font-size: 14px;
line-height: 22px;
/* or 157% */


color: #FFFFFF;
}
#title-text{
    font-style: normal;
font-weight: bold;
font-size: 24px;
line-height: 29px;
letter-spacing: 0.05em;
text-transform: uppercase;
margin: 0 5px;
}
.text ul{
    display: flex;
    justify-content:center;
    align-items: center;
    margin-left: -50px;
}
.main{
    display: flex;
    flex-direction: column;

}
footer {
    width: 100%;
    height: 300px;
    background: #212121;
    display: flex;
    justify-content: space-around;
    align-items: center;
    
}
li{
    list-style: none;
}

@media screen and (max-width:640px) {
    footer{
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    }
    footer div{
        width: 200px;
        margin: 0 auto;
    }
    .text{

    }
   .link{
     margin-top: 20px;
   }
   .categories{
      
   }
   .social-network{
      
   }
}
@media screen and (max-width:416px){
    footer{
            height: 600px;

    }
}
</style>