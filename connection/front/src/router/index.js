import { createRouter, createWebHistory } from 'vue-router'
import ViewBack from '../views/ViewBack.vue'
import AdminView from '../views/AdminView.vue'
import SubCreate from '../views/SubCreate.vue'
import SubView from '../views/SubView.vue'
import UserCreate from '../views/UserCreate.vue'
import SearchView from '../views/SearchView.vue'

const routes = [  
  {
    path: '/view',
    name: 'view',
    component: ViewBack
  },
  {
    path: '/subadmin',
    name: 'subadmin',
    component: SubView
  },
  {
    path: '/admin',
    name: 'admin',
    component: AdminView,
    // children:[
    //   {
    //     path: 'subcreate',
    //     name: 'subcreate',
    //     component: SubCreate
    //   },
    // ],
  },
     {
        path: '/subcreate',
        name: 'subcreate',
        component: SubCreate
      },
      {
        path: '/usercreate',
        name: 'usercreate',
        component: UserCreate
      },
      {
        path: '/search',
        name: 'search',
        component: SearchView
      },


]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
