<script setup>
import { Head, Link } from '@inertiajs/vue3';
import NavLayout from "@/Layouts/NavLayout.vue";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Youtube" />
<NavLayout>

</NavLayout>

</template>
