<template>
    <div class="main">
           <div class="container">
              

               <div class="form-control">
          <form @submit.prevent="send">
              Product name:<input v-model="name" name="name" type="text" placeholder=""> 
              Old price:<input v-model="o_price" name="o_price" type="text" placeholder="">
              Current price:<input v-model="c_price" name="c_price" type="text" placeholder="">

               Product description:<textarea v-model="description" name="description" class="description" type="text" placeholder=""></textarea>
             
           for   <select v-model="f" class="select" name="type">
  <option value="men">Для мужчин</option>
  <option value="women">Для женщин</option>
  <option value="childe">Для детей</option>
</select>

              <button type="submit">update</button>

          </form>

               </div>



           </div>
    </div>
</template>



<script>
export default {
    data:()=>({
        name:'',
        o_price:'',
        c_price:null,
        description:null,
        pId:null,
        f:null
    }),
    methods:{
      send(){
            const data = new FormData()
            data.append('id',this.pId)
            data.append('o',this.o_price)
            data.append('c',this.c_price)
            data.append('description',this.description)
            data.append('name',this.name)
            data.append('type',this.f)
           axios.post('/update/product',data)
                 this.$router.push('/product/'+this.pId)
      }
    },
    created(){
        const data = new FormData()
        data.append('id',this.$route.params.id)

        axios.post('/api/product',data)
              .then(data => {
                  let d = data.data
                  this.pId = d.id
                  this.name = d.name
                  this.o_price = d.o_price
                  this.c_price = d.c_price
                  this.description = d.description
                  this.f = d.type
              })
        
    }
}
</script>


<style lang="css" scoped>
*{
    font-family: Montserrat;
}
button{
    margin: 20px auto;
}
.container{
    margin: 30px auto;
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