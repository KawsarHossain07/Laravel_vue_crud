<template>
  <div>
  <nav>
     
    <router-link to="/admin">Admin Page</router-link> ||
    <router-link to="/subadmin">Sub-Admin Page</router-link> ||
    <router-link to="/search">Search Info</router-link> 

    <!-- <router-link to="/subcreate">Create Sub-Admin</router-link> -->

  </nav>
  <router-view/>
</div>
</template>


<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

nav {
  padding: 30px;
}

nav a {
  font-weight: bold;
  color: #2c3e50;
}

nav a.router-link-exact-active {
  color: #42b983;
}
</style>
