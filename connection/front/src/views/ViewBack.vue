<template>
    <div>
    
      <h1><p>{{ message }}</p></h1>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        message: ''
      };
    },
 
    mounted() {
      this.fetchMessage();
    },
    methods:{
        fetchMessage(){
                axios.get('http://localhost:8000/api/message')
                .then((response)=>{
                    console.log(response.data)
                    this.message = response.data.message
                })
                .catch((error)=>{
                  console.log(error)
                  this.errorMsg = 'Error retrieving data'
                })
            }
        }

  };
  </script>
  