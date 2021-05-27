<template>
    <div class="main">
       <div class="header">
                <HeaderComponent></HeaderComponent>
       </div>
<router-view></router-view>
<div class="footer">
<FooterComponent></FooterComponent>
</div>
    </div>
</template>

<script>
import HeaderComponent from './layouts/Header'
import FooterComponent from './layouts/Footer'
export default {
    components:{
HeaderComponent,
FooterComponent
    }
}
</script>

<style scoped>

.header{
    position: relative;
   padding-bottom: 100px;
}
.footer{
    position: relative;
    width: 100%;
}
</style>