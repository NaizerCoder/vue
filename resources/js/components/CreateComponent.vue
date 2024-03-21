<template>

    <div>
        <div class="w-25 m-1">
            <input type="text" class="form-control" v-model="name" id="name" placeholder="name">
        </div>
        <div class="w-25 m-1">
            <input type="text" class="form-control" v-model="age" id="age" placeholder="age">
        </div>
        <div class="w-25 m-1">
            <input type="text" class="form-control" v-model="job" id="job" placeholder="job">
        </div>
        <div class="m-2">
            <button @click.prevent="addPerson" class="btn btn-primary">Добавить</button>
        </div>
        <AttributeComponent :obj="obj"></AttributeComponent>
<!--        <AttributeComponent color="black" is-publish="false" wd="9"></AttributeComponent>-->
    </div>

</template>

<script>
import AttributeComponent from "@/components/AttributeComponent.vue";
export default {
    name: "CreateComponent",
    components: {AttributeComponent},

    data() {
        return {
            name: null,
            age: null,
            job: null,
            obj:{
                color: 'gray',
                isPublish: false,
                wd: 8,
            }
        }
    },

    methods: {
        addPerson(){
            axios.post('/api/people',{name: this.name, age: this.age, job: this.job})
                .then( result => {
                    this.name = null
                    this.age = null
                    this.job = null

                    this.$parent.$refs.index.getPerson()
                })
        },

        thisComponent(from){
            console.log(`This is CreateComponent from ${from}`);
        },

        components:{
            AttributeComponent,
        },
    },
}
</script>
<style scoped>

</style>
