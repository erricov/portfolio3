<script setup>
defineProps({
    links: {
        type: Array,
        required: true,
    },
});
</script>

<template>
    <div>
        <div class="bg-white rounded-lg shadow p-4">
            <div v-if="!links">
                <p class="text-gray-600">No links found.</p>
            </div>

            <ul class="list-disc pl-5">
                <li v-for="link in links" :key="link.id" class="text-gray-600">
                    <!-- <a :href="link.url" class="text-blue-500 hover:underline"> -->
                        {{ link.name }}
                    <!-- </a> -->
                </li>
            </ul>
        </div>
    </div>

</template>