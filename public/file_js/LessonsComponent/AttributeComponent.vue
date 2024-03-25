<template>
    <div class="">
        <div>Color: {{ obj.color }}</div>
        <div>Published: {{ obj.isPublish ? 'published' : 'no_publish' }} </div>
        <div>width: {{ obj.wd > 10 ? '>10' : '<10' }}</div>

<!--        <div>Color: {{ color }}</div>-->
<!--        <div>Published: {{ isPublish ? 'published' : 'no_publish' }} </div>-->
<!--        <div>width: {{ wd > 10 ? '>10' : '<10' }}</div>-->
    </div>
</template>

<script>
export default {
    name: "AttributeComponent",
    data() {
        return {
        }
    },
    props: [
        'obj'
        // 'color', 'isPublish', 'wd'
    ]
}
</script>

<style scoped>

</style>
