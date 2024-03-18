<template>
    <div>
        <button @click="sayHello">Hello</button>
        <button @click="sayHi">Hi</button>
    </div>
    <!-- <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">City</th>
        </tr>
        </thead>
        <tbody v-for="user in ageUsersLess">
        <tr>
            <td>{{ user.name }}</td>
            <td>{{ user.age }}</td>
            <td>{{ user.city }}</td>
        </tr>
        </tbody>
    </table>
-->


</template>

<script>
import SinglePostComponent from "@/components/SinglePostComponent.vue";

export default {
    name: "PostComponent",
    data() {
        return {
            person: null,

        }
    },

    methods: {

        getPosts() {
            axios.get('/person')
                .then( item => { console.log ( this.person = item.data) }

                )
        }
    },

    mounted() {
        this.getPosts()
    },

    computed: {

    },

    components: {
        SinglePostComponent
    }
}
</script>
<style scoped>

</style>
