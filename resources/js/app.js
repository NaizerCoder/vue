import './bootstrap';
import {createApp} from 'vue/dist/vue.esm-bundler'
import * as VueRouter from "vue-router";

import PostComponent from "@/components/PostComponent.vue";
import TagComponent from "@/components/TagComponent.vue";

import Index from "@/components/Index.vue";

const routes = [
    {
        path:'/posts',
        component: PostComponent
    },
    {
        path:'/tags',
        component: TagComponent
    }
]

const router = VueRouter.createRouter({

    history: VueRouter.createWebHistory('/'),
    routes
})

const app = createApp({
    el: '#app',
    components:{
        'index': Index
    }
});

app.use(router)
app.mount('#app')
