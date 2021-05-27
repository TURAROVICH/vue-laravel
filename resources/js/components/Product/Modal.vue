<template>
    <div class="w-100 h-100 text-center ">
             <div class="container">
                <h1>Your data</h1>  <h2 @click="close">X</h2>

                <form @submit.prevent="buy">
  <p>Please select your preferred contact method:</p>
  <div>
    <input type="radio" id="contactChoice1"
           name="contact" value="email" v-model="picked">
    <label for="contactChoice1">Email</label>
    <input type="radio" id="contactChoice2"
           name="contact" value="phone" v-model="picked">
    <label for="contactChoice2">Phone</label>
    <input type="radio" id="contactChoice3"
           name="contact" value="whatsapp" v-model="picked">
    <label for="contactChoice3">Whatsapp</label>
  </div>
  <p> you choosed:{{picked}} </p>

  <input id="input" :type="picked" v-model="way_of_communication" :placeholder="check">
   <p :class="{hideEr:hide}" class="error" v-html="error"></p>
  <div>
    <button :class="{btn:picked}" type="submit">Submit</button>
  </div>
</form>

             </div>
    </div>
</template>

<script>
export default {
    data:()=>({
    picked:'',
    check:'',
    error:'',
    hide:false
    }),
    methods:{
       buy(){
        if(this.picked == "phone" || this.picked == "whatsapp"){
          let error = this.picked.length < 12 ? "your number is less than 12 <br> example:(505)-12-12-12" : "your number is greater than 12 <br>example:(505)-12-12-12"
           this.error = error
           return setTimeout(()=>this.hide=true,3000)

        }else if(this.picked=="email"){
         
         let error = !this.check.includes('@') ? "Your email dont includes symbol @ <br> example:example@exmp.com" : "";
         error = this.check.length < 7 ? "your email is less than 7 <br> example:example@exmp.com" : ""
 this.error = error;
 return setTimeout(()=>this.hide=true,3000)
        }else{
        return this.$emit('close');
        }
       },
       close(){
           return this.$emit('close')
       }
    },
    watch:{
        picked(n){
          if(n=="phone"){
              this.check = '(505)-12-12-12'
              this.hide = false
          }
          if( n=='whatsapp'){
               this.check = '(505)-12-12-12'
              this.hide = false

          }
          if(n=="email"){
              this.hide = false
              this.check = "example@exmp.com"
          }
        }
    }
}
</script>

<style scoped>
h2{
    align-items: flex-start;
    justify-content: flex-end;
    display: flex;
    margin-top: -50px;
    margin-right: 20px;
    font-family: monospace;
    cursor: pointer;
}
.hideEr{
    opacity: 0;
    visibility: hidden;
    
}
.error{
    color: #CB4335;
    transition: all .9s ease;
}
button{
    transition: all .9s ease-in;
    margin: 10px auto;
    background:rgb(52, 73, 94 );
    outline: none;
    border: none;
    border-radius: 10px;
    width: 100px;
    height: 30px;
    cursor: pointer;
}
.btn{
    background: #2ECC71 ;
    color:white;
    
}
#input{
    border:none;
    outline: none;
    border-bottom: 1px solid rgb(52, 73, 94 );
}
p{
   color:#808B96;
}
label{
    color: #606A5E;
}
h1{
    color:rgb(39, 55, 70 
)
  }
.text-center{
    text-align: center;
    align-items: center;
    justify-content: center;
    display: flex;
    height: 100vh;
        width: 100%;
  background: rgba(0, 0, 0, 0.685);
  z-index: 1008;

}

.container{

    background: #fff;
    width: 550px;
    height: 370px;
    color: tomato;
      border-radius: 15px;
}
</style>