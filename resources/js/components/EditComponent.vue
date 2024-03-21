<template>
        <tr :class="this.$parent.isEdit(people.id)? '' : 'd-none' ">
            <th scope="row">{{ people.id }}</th>
            <td>
                <!-- <input type="text" :value="people.name" class="form-control">-->
                <input type="text" v-model="name" class="form-control">
            </td>
            <td>

                <input type="number" v-model="age" class="form-control">
            </td>
            <td>

                <input type="text" v-model="job" class="form-control">
            </td>
            <td>
                <a href="#" @click.prevent="updatePerson(people.id)" class="btn btn-success">Update</a>
                <!--<a href="#" @click.prevent="updatePerson(people.id, people.name, people.age, people.job)" class="btn btn-success">Update</a>-->
            </td>
        </tr>
</template>

<script>
export default {

    name: "EditComponent",
    props: [
        'people',
    ],
    data() {
        return {
            name: null,
            age: null,
            job: null,
        }
    },

    mounted() {

    },
    methods: {
        updatePerson(id) {

            this.$parent.editPerson = null
            axios.patch(`api/people/${id}`, {name: this.name, age: this.age, job: this.job})
                .then(result => {
                    // console.log(result.data);
                    this.$parent.getPerson()
                })
        },

    },
}
</script>
<style scoped>

</style>
