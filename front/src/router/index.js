import { createRouter, createWebHistory } from 'vue-router'

const routes = [
  {
    path: '/',
    name: 'create',
    component: () => import('../views/Create.vue')
  },
  {
    path: '/list',
    name: 'list',
    component: () => import('../views/List.vue')
  },
  {
    path: '/entry/edit/:id',
    name: 'editEntry',
    component: () => import('../views/Edit.vue')
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
