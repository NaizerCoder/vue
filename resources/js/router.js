import * as VueRouter from "vue-router";

export default VueRouter.createRouter ({

    history: VueRouter.createWebHistory('/'),
    routes: [
        {
            path: '/people',
            component: () => import('./components/Person/Index.vue'),
            name: 'person.index'
        },

    ],
})



