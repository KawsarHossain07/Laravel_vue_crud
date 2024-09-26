
<template>
    <div>
      <label for="search">Search Here!</label>
      <br>
      <input id="search" placeholder="****" v-model="searchValues" @input="filterUsers"/>
      <br>
      
      <br>
      <br>
       
      <div v-if="userList.length">
        <div v-for="user in userList" :key="user.id">
          <p> 
            ID:  {{ user.id }} <br>
            name:  {{ user.name }} <br>
            password:  {{ user.password }} <br>
            status:  {{ user.status }} <br>
          </p> 
        </div>
        <br>
      </div>
      <div class="noUser" v-else>No user is found for this search</div>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  export default {
    data() {
      return {
        searchValues: '',
        users: [],
        userList: []
      }
    },

    mounted() {
      this.fetchUsers();
    },

    methods: {
      fetchUsers() {
        axios.get('http://127.0.0.1:8000/api/subadmin')
          .then(response => {
            this.users = response.data;
            this.userList = this.users;
          })
          .catch(error => {
            console.error(error);
          });
      },
      filterUsers() {
        if (this.searchValues) {
            this.userList = this.users.filter(user =>
            user.id.toString().includes(this.searchValues) ||
            user.name.toLowerCase().includes(this.searchValues) ||
            user.password.includes(this.searchValues) ||
            user.role_id.toString().includes(this.searchValues) ||
            user.status.toLowerCase().includes(this.searchValues)
            );
        } else {
          this.userList = this.users;
        }
      }
    }
  }
  </script>
  
  <style scoped>
  .noUser {
    color: red;
  }
  </style>