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
                <EditComponent :people="people" :ref="`edit_${people.id}`"></EditComponent>
            </template>
            </tbody>
        </table>

    </div>
</template>
<script>
import EditComponent from "@/components/EditComponent.vue";
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
        this.$parent.thisComponent('Index')
        this.$parent.$refs.create.thisComponent('Index')
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
            let editName = `edit_${id}`
            let fullEditName = this.$refs[editName][0]
            console.log(this.$refs[editName][0]) //обращение к элементу объекта в кв. скобках [editName], т.к. обращаемяся к переменной fullEditName
            fullEditName.name = name
            fullEditName.age = age
            fullEditName.job = job
        },

        isEdit(id){
            return this.editPerson === id
        },

        thisComponent(from){
            console.log(`This is IndexComponent from ${from}`);
        }
    },
    components: {
        EditComponent
    }
}
</script>
<style scoped>

</style>
