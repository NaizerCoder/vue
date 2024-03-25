<template>
    <div>
        <div class="w-25 m-1">
            <input type="text" class="form-control" v-model="name" id="name" placeholder="name">
        </div>
        <div class="w-25 m-1">
            <input type="number" class="form-control" v-model="age" id="age" placeholder="age">
        </div>
        <div class="w-25 m-1">
            <input type="text" class="form-control" v-model="job" id="job" placeholder="job">
        </div>
        <div class="m-2">
            <button @click.prevent="update" class="btn btn-primary">Обновить</button>
        </div>
    </div>
</template>

<script>
export default {
    name: "Edit",

    data() {
        return {
            persons:null,
            name: null,
            age: null,
            job: null,
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
                    this.name = result.data.name
                    this.age = result.data.age
                    this.job = result.data.job
                })
        },

        update() {

            axios.patch(`/api/people/${this.uid}`, {name: this.name, age: this.age, job: this.job})
                .then(result => {
                    console.log(result.data);
                })
        },

    }
}
</script>

<style scoped>

</style>
