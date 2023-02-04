<script setup>
import {Head, Link} from '@inertiajs/vue3';
import NavLayout from "@/Layouts/NavLayout.vue";
import CheckCircle from "vue-material-design-icons/CheckCircle.vue";
import ThumbUpOutline from "vue-material-design-icons/ThumbUpOutline.vue";
import ThumbDownOutline from "vue-material-design-icons/ThumbDownOutline.vue";


</script>

<template>
    <Head title="Youtube"/>
    <NavLayout>
        <div class="xl:flex">
            <div class="p-3">
                <video src="/Videos/Trees.mp4" controls autoplay/>
                <div class="text-white font-extralight font-extrabold" style="font-size: 1.8rem">A cool video</div>
                <div class="flex items-center mb-4">
                    <div>
                        <img
                            class="rounded-full m-1.5 mt-2 flex items-baseline w-8 h-8"
                            :src="`https://picsum.photos/id/${(Math.random()*100).toFixed(0)}/100` || ''"
                        >
                    </div>
                    <div class="pl-2 mt-1">
                        <div class="text-lg text-white font-extrabold flex items-center">Tanvir Hossen
                            <CheckCircle fillColor="#888888" :size="17"/>
                        </div>
                        <div class="text-sm mb-1 text-gray-400 font-extrabold">1k views -3 days ago</div>
                    </div>
                </div>
                <div class="bg-[#3F3F3F] rounded-lg w-full text-white p-3">
                    <div class="text-lg text-white font-extrabold">1k views -3 days ago</div>
                    <div class="text-sm font-extrabold mb-6">
                        This is a demo section of a video to thing
                    </div>
                    <div class="text-sm font-extrabold mb-6">
                        This is a demo section of a video to thing
                        This is a demo section of a video to thing
                        This is a demo section of a video to thing
                        This is a demo section of a video to thing
                    </div>
                </div>

                <div class="mt-6">
                    <div class="text-white text-lg font-extrabold">12 Comments</div>
                    <div class="flex items-flex mb-4 mt-2">
                        <img
                            class="rounded-full  mt-2 flex w-12 h-12"
                            :src="`https://picsum.photos/id/${(Math.random()*100).toFixed(0)}/100` || ''"
                        />
                        <div class="pl-6 mt-1">
                         <div class="text-white font-extrabold items-baseline">
                             <div> Tanvir Hosssen Bappy</div>
                             <div class="text-gray-400 pl-3">
                                 6 days ago
                             </div>
                         </div>

                            <div class="text-gray-200 text-sm font-extrabold">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                            <div class="mt-4 flex items-center">
                                <ThumbUpOutline fillColor="#FFFFFF" :size="20" class="pr-2"/>
                                <div class="text-gray-400 text-sm font-extrabold pr-10">{{ (Math.random() * 100).toFixed(0) }}</div>
                                <ThumbDownOutline fillColor="#FFFFFF" :size="20"/>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </NavLayout>
</template>
