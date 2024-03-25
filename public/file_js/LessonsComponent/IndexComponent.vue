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
                <ShowComponent :people="people"></ShowComponent>
                <EditComponent :people="people" :ref="`edit_${people.id}`"></EditComponent>
            </template>
            </tbody>
        </table>

    </div>
</template>
<script>
import EditComponent from "@/components/EditComponent.vue";
import ShowComponent from "@/components/ShowComponent.vue";
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

        setPersonId(id, name, age, job) {
            this.editPerson = id
            let editName = `edit_${id}`
            let fullEditName = this.$refs[editName][0]
            console.log(this.$refs[editName][0]) //обращение к элементу объекта в кв. скобках [editName], т.к. обращаемся к переменной fullEditName
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
        EditComponent,
        ShowComponent
    }
}
</script>
<style scoped>

</style>
