<template>
    <SinglePostComponent></SinglePostComponent>
    <div>
        {{ users[2].age }}
    </div>

    <div>
        <button @click="sayHello">Hello</button>
        <button @click="sayHi">Hi</button>
    </div>

    <div>{{text}}</div>

</template>

<script>
import SinglePostComponent from "@/components/SinglePostComponent.vue";
export default {
    name: "PostComponent",
    data(){
        return{
            name: 'MyName',
            age: '36',
            bool: true,
            arr: ['Value_1', 'Value_2'],
            obj: {
                name: 'Alex',
                city: 'Belgorod'
            },
            users: [  {age: 16},  {age: 20},  {age: 23},  {age: 30} ]

        }
    },

    methods:{

        sayHello(){
            console.log('Hello')
        },

        sayHi(){
            console.log('Hi')
        },
    },

    computed: {
        text(){
            return this.obj.name + " из " + this.obj.city
        },
    },

    components: {
        SinglePostComponent
    }
}
</script>
<style scoped>

</style>
