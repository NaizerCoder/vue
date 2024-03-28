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
            <button :disabled="isDisabled" @click.prevent="store" class="btn btn-primary">Добавить</button>
        </div>
    </div>
</template>

<script>
import router from "../../router.js";
export default {
    name: "Create",

    data() {
        return {
            name: null,
            age: null,
            job: null
        }
    },
    methods: {
        store() {
            axios.post('api/people', {name: this.name, age: this.age, job: this.job})
                .then( res => {
                        this.$router.push({name: 'person.index'})
                    }
                )}
    },
    computed:{

        isDisabled(){

            return !(this.name && this.age && this.job)
        }
    }


}
</script>

<style scoped>

</style>
