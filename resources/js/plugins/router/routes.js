export const routes = [
  { path: '/', redirect: '/dashboard' },
  {
    path: '/',
    component: () => import('@/layouts/default.vue'),
    meta: { requiresAuth: true },
    children: [
      {
        path: 'dashboard',
        component: () => import('@/pages/dashboard.vue'),
      },
      {
        path: 'account-settings',
        component: () => import('@/pages/account-settings.vue'),
      },
      {
        path: 'typography',
        component: () => import('@/pages/typography.vue'),
      },
      {
        path: 'icons',
        component: () => import('@/pages/icons.vue'),
      },
      {
        path: 'cards',
        component: () => import('@/pages/cards.vue'),
      },
      {
        path: 'tables',
        component: () => import('@/pages/tables.vue'),
      },
      {
        path: 'form-layouts',
        component: () => import('@/pages/form-layouts.vue'),
      },
      {
        path: '/product/',
        children: [
          {
            path: 'add',
            component: () => import('@/pages/product/add.vue'),
          },
          {
            path: 'list',
            component: () => import('@/pages/product/index.vue'),
          },
        ],
      },
      {
        path: '/category/',
        children: [
          {
            path: 'add',
            component: () => import('@/pages/category/add.vue'),
          },
          {
            path: 'list',
            component: () => import('@/pages/category/index.vue'),
          },
        ],
      },
      {
        path: '/order/',
        children: [
          {
            path: 'add',
            component: () => import('@/pages/order/add.vue'),
          },
          {
            path: 'list',
            component: () => import('@/pages/order/index.vue'),
          },
        ],
      },
    ],
  },
  {
    path: '/',
    component: () => import('@/layouts/blank.vue'),
    children: [
      {
        path: 'login',
        component: () => import('@/pages/login.vue'),
      },
      {
        path: 'register',
        component: () => import('@/pages/register.vue'),
      },
      {
        path: '/:pathMatch(.*)*',
        component: () => import('@/pages/[...error].vue'),
      },
    ],
  },
]
