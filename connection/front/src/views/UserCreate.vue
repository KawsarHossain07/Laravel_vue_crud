<template>
    <form @submit.prevent="createUser">
        <h1>Let's Create User</h1>
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
        name:'UserCreate',
        data(){
           return{
              formData:{
                name:'',
                password: '',
            
              }
           }
        },


        methods:{
            createUser(){
               axios.post('http://localhost:8000/api/usercreate',this.formData)
               .then((response)=>{
                  console.log(response.data);
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