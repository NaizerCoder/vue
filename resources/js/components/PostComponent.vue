<template>
    <div>
        <IndexComponent ref="index"></IndexComponent>
        <CreateComponent ref="create"></CreateComponent>
    </div>

</template>

<script>
import CreateComponent from "@/components/CreateComponent.vue";
import IndexComponent from "@/components/IndexComponent.vue";
export default {
    name: "PostComponent",
    data() {
        return {
            persons: null,
        }
    },
    mounted() {
        console.log(this.$refs.index.thisComponent('Post'))
        console.log(this.$refs.create.thisComponent('Post'))

    },

    methods: {
        thisComponent(from){
            console.log(`This is PostComponent from ${from}`);
        }
    },

    components: {
        CreateComponent,
        IndexComponent
    }
}
</script>
<style scoped>

</style>
