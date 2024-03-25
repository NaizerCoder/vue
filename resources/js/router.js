import * as VueRouter from "vue-router";

export default VueRouter.createRouter ({

    history: VueRouter.createWebHistory(),
    routes: [
        {
            path: '/people',
            component: () => import('./components/Person/Index.vue'),
            name: 'person.index'
        },
        {
            path: '/create',
            component: () => import('./components/Person/Create.vue'),
            name: 'person.create'
        },
        {
            path: '/people',
            component: () => import('./components/Person/Index.vue'),
            name: 'person.index'
        },
        {
            path: '/',
            component: () => import('./components/Person/Index.vue'),
            name: ''
        },

    ],
})



