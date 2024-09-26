<template>
    <div>
        
        <h1 id="errorh1" v-if="errorMsg">{{errorMsg}}</h1>

        <h>sub-admin table</h>
        <div class="table-container">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Password</th>
                        <th>role_id</th>
                    </tr>
                </thead>    
                    <tbody>
                        <tr v-for="val in getArray" :key="val.id">
                            <td>{{val.id}}</td>
                            <td>{{val.name}}</td>
                            <td>{{val.password}}</td>
                            <td>{{val.role_id}}</td>
                        </tr>
                    </tbody>            
            </table>
        </div>
        <br>
        <br>
        <nav>
            <router-link to="/subcreate">Create Sub-Admin</router-link>
        </nav>
        <router-view/>
        
    </div>
</template>

<script>
import axios from 'axios';

    export default {
        name:'AdminView',

        data(){
            return{
                getArray:[],               
            }
        },

    
        created(){
           this.fetchArray()
        },


        methods: {
            fetchArray() {
                axios.get('http://localhost:8000/api/admin')
                .then((response) => {
                console.log(response.data)
                this.getArray = response.data; 
            })
               .catch((error) => {
                console.log(error);
                this.errorMsg = 'Error retrieving data';
            });
          }
        }
    }


</script>

<style scoped>
   
    .table-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 30px; 
        border: 5ch;
    }
    .custom-table {
        border-collapse: collapse;
        width: 35%; 
        border: 1px solid #070707; 
    }

    .custom-table th, .custom-table td {
        border: 1px solid #070707; 
        padding: 4px; 
        text-align: center; 
    }
    #errorh1{
        color: red;
    }
</style>