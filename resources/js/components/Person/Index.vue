<template>
    <div class="w-50 p-3">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Job</th>
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
