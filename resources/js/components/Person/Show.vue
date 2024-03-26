<template>
    <div class="w-25 p-2" >
        <table class="table table-bordered text-center">
            <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Job</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody v-if="person">
            <tr>
                <td>{{ person.name }}</td>
                <td>{{ person.age }}</td>
                <td>{{ person.job }}</td>
                <td>
                    <router-link :to="{ name: 'person.edit'}">Редактировать</router-link>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "Show",
    data() {
        return {
            person: null,
            uid: this.$route.params.id
        }
    },
    mounted() {
        this.getPerson()
    },
    methods: {
        getPerson() {
            axios.get(`/api/people/${this.uid}`)
                .then(result => {
                    this.person = result.data
                })
        }
    }
}
</script>

<style scoped>

</style>
