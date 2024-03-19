<template>
    <div>
        <CreateComponent></CreateComponent>

    </div>

</template>

<script>
import CreateComponent from "@/components/CreateComponent.vue";

export default {
    name: "PostComponent",
    data() {
        return {
            persons: null,
        }
    },
    components: {
        CreateComponent
    }
}
</script>
<style scoped>

</style>
