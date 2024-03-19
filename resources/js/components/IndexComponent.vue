<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="people in persons">
                <td>{{ people.name }}</td>
                <td>{{ people.age }}</td>
                <td>{{ people.job }}</td>
            </tr>
            </tbody>
        </table>

    </div>
</template>
<script>
export default {
    name: "IndexComponent",
    data() {
        return {
            persons: null,
        }
    },

    mounted() {
        this.getPerson()
    },

    methods: {
        getPerson(){
            axios.get('/api/people')
                .then( result => {
                    this.persons = result.data
                })
        }
    },
}
</script>
<style scoped>

</style>
