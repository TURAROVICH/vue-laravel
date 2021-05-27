<template>
    <div class="form-control">
          <form @submit.prevent="send"  method="post" enctype="multipart/form-data">
              Product name:<input v-model="name" name="name" type="text" placeholder=""> 
              Old price:<input v-model="o_price" name="o_price" type="text" placeholder="">
              Current price:<input v-model="c_price" name="c_price" type="text" placeholder="">

               Product description:<textarea v-model="description" name="description" class="description" type="text" placeholder=""></textarea>
             
           for   <select v-model="f" class="select" name="type">
  <option value="men">Для мужчин</option>
  <option value="women">Для женщин</option>
  <option value="childe">Для детей</option>
</select>
              <input ref="image" name="avatar" class="upload-file" type="file"  placeholder="image">

              <button>add</button>

          </form>
<transition name="fade">  
     <div class="res" v-if="response">
           <p>
               {{response}}
           </p>
     </div>
</transition> 

</div>

</template>

<script>
export default {
    data:()=>({
        name:'',
        o_price:'',
        c_price:'',
        description:'',
        f:'',

        response:false
    }),
    methods:{
      send(){
       
       let formData = new FormData();
      formData.append('avatar', this.$refs.image.files[0]);
      formData.append('name', this.name);
      formData.append('o_price', this.o_price);
      formData.append('c_price', this.c_price);
      formData.append('description', this.description);
      formData.append('type', this.f);

       axios.post('/add',
          formData, {
            headers: {
              'Content-Type': 'multipart/form-data'
            }
          }
        ).then(r=>this.response = 'Success')
         .catch(e=>this.response = 'Fail')

         setTimeout(()=>this.response = null,4000)
       },
    }
}
</script>


<style lang="css" scoped>
.fade-enter-active, .fade-leave-active {
  transition: all .3s ease;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
  transform: translateY(200px);
}

.res{
    width: 100px;
    height: 50px;
    background: #34495E;
    color: #F0F3F4;
    position: absolute;
    top: 80vh;
    left: 5vw;
    border-radius: 15px;
    align-items: center;
    justify-content: center;
    text-align: center;
    transition: all 3s ease;
}

textarea{
outline: none;
border: 1px solid #212F3C;
border-radius: 15px;
margin-bottom: 10px;
width: 400px;
height: 100px;
}
.upload-file{
    border-radius: 15px;
    border: 1px solid #34495E;

}
.select{
    width: 200px;
    outline: none;
    border: none;
    border: 1px solid #212F3C;
    height: 30px;
    border-radius: 15px;
    font-family: Montserrat;
    color: #34495E;
    font-weight: 900;
}
form{
    display: flex;
    flex-direction: column;
    font-family:Montserrat ;
    text-align: center;
    justify-content: center;
    align-items: center;
    box-sizing: border-box;
}
input{
    outline: none;
    border: none;
    border-bottom: 2px solid #1F618D;
    margin: 20px 0;
}
button{
    outline: none;
    border: none;
    border-radius: 15px;
    background: #34495E;
    width: 150px;
    height: 40px;
    color: #fff;
    font-size: 20px;
    transition: all .9s ease;
    cursor: pointer;
    -webkit-box-shadow: 1px 4px 44px -8px rgba(0, 0, 0, 0.28);
-moz-box-shadow: 1px 4px 44px -8px rgba(0, 0, 0, 0.28);
box-shadow: 1px 4px 44px -8px rgba(0, 0, 0, 0.28);
}
button:hover{
   background: #229954;
   -webkit-box-shadow: 1px 52px 48px -8px rgba(0, 0, 0, 0.28);
-moz-box-shadow: 1px 52px 48px -8px rgba(0, 0, 0, 0.28);
box-shadow: 1px 52px 48px -8px rgba(0, 0, 0, 0.28);

}
</style>