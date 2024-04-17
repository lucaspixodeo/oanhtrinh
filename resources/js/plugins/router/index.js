import { createRouter, createWebHistory } from 'vue-router'
import { routes } from './routes'
import { checkAuth } from '../../auth'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes,
})

router.beforeEach((to, from, next) => {
  if (to.meta.requiresAuth || to.matched.some(record => record.meta.requiresAuth)) {
    // Check if user is authenticated
    const isAuthenticated = checkAuth() // You need to implement this function to check authentication
    if (!isAuthenticated) {
      // Redirect to login if not authenticated
      next('/login')
    } else {
      next() // Proceed to the route
    }
  } else {
    next() // Proceed to the route
  }
});

export default function (app) {
  app.use(router)
}
export { router }
