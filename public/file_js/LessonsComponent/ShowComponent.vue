<template>
    <tr :class="this.$parent.isEdit(people.id) ? 'd-none' : '' ">
        <th scope="row">{{ people.id }}</th>
        <td>{{ people.name }}</td>
        <td>{{ people.age }}</td>
        <td>{{ people.job }}</td>
        <td>
            <a href="#" @click.prevent="this.$parent.setPersonId(people.id,people.name,people.age,people.job)" class="btn btn-success">Edit</a>
        </td>
        <td>
            <a href="#" @click.prevent="deletePerson(people.id)" class="btn btn-danger">Delete</a>
        </td>
    </tr>
</template>

<script>
export default {
    name: "ShowComponent",
    props: [
        'people',
    ],
    data() {
        return {

        }
    },

    methods: {
        deletePerson(id) {
            axios.delete(`/api/people/${id}`)
                .then(result => {
                    console.log(result.data);
                    this.$parent.getPerson()
                })
        },
        
    },
}
</script>
<style scoped>

</style>
