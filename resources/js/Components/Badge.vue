<script setup>
import {toRefs} from "vue";

const props = defineProps(
    {
        background:String
    })
// const {background} = toRefs(props)

</script>

<template>
    <div class="flex space-x-2 justify-center">
        <span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold text-white rounded" :class="background">Check Components</span>
    </div>
</template>

<style scoped>

</style>
