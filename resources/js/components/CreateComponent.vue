<template>
    <div>
        <meta name="csrf-token" content="{{ csrf_token() }}">

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
    </div>
</template>
<script>
export default {
    name: "CreateComponent",
    data() {
        return {
            name: null,
            age: null,
            job: null,
        }
    },
    methods: {
        addPerson(){
            axios.post('/api/people',{name: this.name, age: this.age, job: this.job})
                .then( result => {
                    this.name = null
                    this.age = null
                    this.job = null
                })
        }
    },
}
</script>
<style scoped>

</style>
