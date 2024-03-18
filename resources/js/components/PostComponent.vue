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
        <tbody v-for="person in persons">
        <tr>
            <td>{{ person.name }}</td>
            <td>{{ person.age }}</td>
            <td>{{ person.city }}</td>
        </tr>
        </tbody>
    </table>

</template>

<script>
import SinglePostComponent from "@/components/SinglePostComponent.vue";

export default {
    name: "PostComponent",
    data() {
        return {
            persons: null,
        }
    },

    methods: {

        getPosts() {
            axios.get('/person')
                .then( item => { this.persons = item.data }
                  /*  .then(function(data){
                        this.persons = data
                    }*/
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
