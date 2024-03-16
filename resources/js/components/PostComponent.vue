<template>

    <div>
        <button @click="sayHello">Hello</button>
        <button @click="sayHi">Hi</button>
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">City</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="user in users">
            <td>{{ user.name }}</td>
            <td>{{ user.age }}</td>
            <td>{{user.city}}</td>
        </tr>
        </tbody>
    </table>

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
            users: [
                {   name: 'Alex',
                    age: 36,
                    city: 'Belgorod',
                },
                {   name: 'Irina',
                    age: 35,
                    city: 'Gubkin',
                },
                {   name: 'Michel',
                    age: 3,
                    city: 'St. Oskol',
                },

            ]

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
