<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
                <th scope="col">Action</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="people in persons">
                <tr :class="isEdit(people.id) ? 'd-none' : '' ">
                    <th scope="row">{{ people.id }}</th>
                    <td>{{ people.name }}</td>
                    <td>{{ people.age }}</td>
                    <td>{{ people.job }}</td>
                    <td>
                        <a href="#" @click.prevent="setPersonId(people.id,people.name,people.age,people.job)" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                        <a href="#" @click.prevent="deletePerson(people.id)" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr :class="isEdit(people.id) ? '' : 'd-none' ">
                    <th scope="row">{{ people.id }}</th>
                    <td>
<!--                        <input type="text" :value="people.name" class="form-control">-->
                        <input type="text" v-model="name" class="form-control">
                    </td>
                    <td>
<!--                        <input type="text" :value="people.age" class="form-control">-->
                        <input type="number" v-model="age" class="form-control">
                    </td>
                    <td>
<!--                        <input type="text" :value="people.job" class="form-control">-->
                        <input type="text" v-model="job" class="form-control">
                    </td>
                    <td>
                        <a href="#" @click.prevent="updatePerson(people.id)" class="btn btn-success">Update</a>
<!--                        <a href="#" @click.prevent="updatePerson(people.id, people.name, people.age, people.job)" class="btn btn-success">Update</a>-->
                    </td>
                </tr>
            </template>
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
            editPerson:null,
            name:'',
            age:null,
            job:''
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
        },

        updatePerson(id){

            this.editPerson = null
            axios.patch(`api/people/${id}`, {name: this.name, age: this.age, job: this.job})
                .then( result => {
                   // console.log(result.data);
                    this.getPerson()
                })
        },

        deletePerson(id) {
            axios.delete(`/api/people/${id}`)
                .then(result => {
                    console.log(result.data);
                    this.getPerson()
                })
        },

        setPersonId(id, name, age, job) {
            this.editPerson = id
            this.name = name
            this.age = age
            this.job = job
        },

        isEdit(id){

            return this.editPerson === id
        }
    },
}
</script>
<style scoped>

</style>
