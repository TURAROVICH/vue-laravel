<template>
    <div class="main">
        <p>Copyright © 2019. Все права защищены</p>
        <p>Политика приватности</p>
    </div>
</template>

<style scoped>
.main{
    width: 100%;
    height: 70px;
    display: flex;
    align-items: center;
    justify-content: space-around;
background: #E5E5E5;
flex-direction: row;

}
p{
    
font-family: Montserrat;
font-style: normal;
font-weight: normal;
font-size: 14px;
line-height: 22px;
color: #212121;

}

@media screen and (max-width:488px){
    .main{
        flex-direction: column;
        height: 70px;
    }
}
</style>