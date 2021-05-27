<template>
    <div class="container">
       <img :src="img" alt="" width="124" height="116">
       <h2>{{name}}</h2>
       <h3>{{email}}</h3>
       <h5>дата регистрации  {{created_date | date}}</h5>
                    <button @click="$router.push('/add')">
add product
             </button>
    </div>
</template>

<script>
export default {
    props:['img','email','name','created_date']
}
</script>

<style scoped>
.container{
    -webkit-box-shadow: 1px 2px 46px -5px rgba(0, 0, 0, 0.6);
-moz-box-shadow: 1px 2px 46px -5px rgba(0, 0, 0, 0.6);
box-shadow: 1px 2px 46px -5px rgba(0, 0, 0, 0.6);
    border-radius: 15px;
    text-align: center;
    font-family: ' Courier', monospace;
    padding: 50px;
    margin: 0 100px 100px 50px;
}
button{
    outline: 0;
    border:none;
    border-radius: 15px;
    width: 100px;
    height: 30px;
    background: #2ECC71 ;
    font-family:  Montserrat;
    font-weight: 999;
    color: #E5E7E9;
    cursor: pointer;
    transition: all .9s ease ;
}
button:hover{
  -webkit-box-shadow: 1px 4px 44px 27px rgba(0, 0, 0, 0.45);
-moz-box-shadow: 1px 4px 44px 27px rgba(0, 0, 0, 0.45);
box-shadow: 1px 4px 44px 27px rgba(0, 0, 0, 0.45);
}
@media  screen and (max-width:540px) {
    .container{
        margin: 0 50px 50px 30px;
    }
}
</style>