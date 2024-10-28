<script setup>
import DeleteLink from "./DeleteLink.vue";

defineProps({
    links: {
        type: Array,
        required: true,
    }
});


</script>

<template>
    <div>
        <div class="bg-white rounded-lg shadow p-4">
            <div v-if="!links.length">
                <p class="text-gray-600">No links found.</p>
            </div>

            <ul class="list-disc pl-5 space-y-2">
                <li
                    v-for="link in links"
                    :key="link.id"
                    class="flex justify-between items-center text-gray-600"
                >
                    <span class="flex-1">
                        {{ link.name }}
                    </span>
                    <!-- Edit button -->
                    <button
                        class="bg-blue-500 text-white px-1 py-0.5 rounded hover:bg-blue-600 text-sm"
                    >
                        Edit
                    </button>
                    <DeleteLink :link="link" />
                </li>
            </ul>
        </div>
    </div>
</template>