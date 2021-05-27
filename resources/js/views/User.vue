<template>
    <div class="user">
         <UserData/>
    </div>
</template>

<script>
import UserData from '../components/User/Main'
export default {
    components:{
        UserData
    }
}
</script>

<style>
.user{
    position: relative;
    margin: 50px 0 0 30px;
}
</style>