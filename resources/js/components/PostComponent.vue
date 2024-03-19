<template>
    <div>
        <IndexComponent></IndexComponent>
        <CreateComponent></CreateComponent>
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
    components: {
        CreateComponent,
        IndexComponent
    }
}
</script>
<style scoped>

</style>
