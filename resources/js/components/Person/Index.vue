<template>
    <div class="w-25">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
            </tr>
            </thead>
            <tbody v-for="person in persons">
            <tr>
                <td>{{ person.name }}</td>
                <td>{{ person.age }}</td>
                <td>{{ person.job }}</td>
            </tr>
            </tbody>
        </table>

    </div>
</template>

<script>
export default {
    name: "Index",

    data() {
        return {
            persons: null,
        }
    },
    mounted() {
        this.getPerson()
    },
    methods: {
        getPerson() {
            axios.get('/api/people')
                .then(result => {
                    this.persons = result.data
                })
        }

    }
}
</script>

<style scoped>

</style>
