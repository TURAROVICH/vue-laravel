<template>
   <div class="data">
             <Profile :img="user.profile" 
             :email="user.email"
             :name="user.name"
             :created_date="user.created_at"/> 

<div class="container-act">
             <h2>Actions:</h2>
    <div v-for="(i,k) in data" :key="k" :ref="i.name">
   
            <div class="for">
                <h5 class="title">{{k+1}}</h5>
                <h4 class="title">{{i.name}}</h4>
                <div class="type">{{i.type}}</div>
                <div class="created_at">{{i.created_at}}</div>
            </div>

            <div class="btns">
                    <button class="btn link" @click="$router.push('/product/'+i.id)">link</button>
                <button class="btn update" @click="$router.push('/update/product/'+i.id)">update</button>
                <button @click="del(i.name,i.id)" class="btn delete">delete</button>
            </div>

     </div>

</div>
   </div>
</template>


<script>
import Profile from './Profile'
export default {
    data:()=>({
       user:null,
       loader:true,
       data:null
    }),
    methods:{
      del(name,id){
       const div =  eval(`this.$refs.${name}`)
       div[0].style.display = 'none'
       
       const data = new FormData()
       data.append('id',id)
       axios.post('/product/delete',data).then(r=>r)
       .catch(e=>e)
      }
    },
    created:function(){
        axios.get('api/user')
        .then(user_data=>this.user=user_data.data)
        .catch(error=>error)
         
         axios.get('/api/user/actions')
         .then(r=>this.data = r.data)
    },
    components:{
        Profile
    }
}
</script>

<style scoped>
.container-act{
    margin: 50px 30px;
    border-radius: 20px;
    font-family:Montserrat ;
    justify-content: center;
    align-items: center;
}
.for{
    width: 80%;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.btns{
    text-align: center;
    align-items: center;
    justify-content: space-around;
    display: flex;
}
.btn{
    width: 120px;
    height: 40px;
    border-radius: 20px;
    outline: none;
    border:none;
    cursor: pointer;
    transition: all .9s ease;
    font-size: 17px;
    color: #F4F6F7;
}
.update{
    background: #28B463;
}
.delete{
    background: #B03A2E;
}
.link{
    background: #34495E;
}
.btn:hover{
    transform: scale(1.2);
}
</style>