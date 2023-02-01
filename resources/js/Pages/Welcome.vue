<script setup>
import { Head, Link } from '@inertiajs/vue3';
import NavLayout from "@/Layouts/NavLayout.vue";
import VideoCard from "@/Components/VideoCard.vue";

// defineProps({
//     canLogin: Boolean,
//     canRegister: Boolean,
//     laravelVersion: String,
//     phpVersion: String,
// });
</script>

<template>
    <Head title="Youtube" />
<NavLayout>
    <div class="grid 2xl:grid-cols-5 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2">
        <VideoCard
            title="Hello Title"
            user="Hello User"
            views="23k"
            image="https://picsum.photos/id/230/100"
            videoUrl="/Videos/Lake.mp4"
            thumbnail="/Videos/Thumbnails/Lake.png"
        />
    </div>

</NavLayout>

</template>
