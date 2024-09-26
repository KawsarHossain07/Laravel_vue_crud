<template>
    <form @submit.prevent="createSub">
        <h1>Let's Create Sub Admin</h1>
    <div>
       <label for="name">Name: </label>
       <input id="name" type="text" placeholder="Enter Name"  v-model="formData.name"/>
       
       <br>
       <br>

       <label for="pass">password: </label>
       <input id="pass" type="text" placeholder="Enter Password"  v-model="formData.password"/>
    </div>
       <button>Submit</button>
</form>
</template>

<script>
import axios from 'axios'

    export default {
        name:'SubCreate',
        data(){
           return{
              formData:{
                name:'',
                password: '',
            
              }
           }
        },


        methods:{
            createSub(){
               axios.post('http://localhost:8000/api/subcreate',this.formData)
               .then((response)=>{
                  console.log(response.data);
                  this.$router.push('/admin');
               })
               .catch((error)=>{
                console.log(error)
               })
            }
        }
    }
</script>

<style scoped>

</style>