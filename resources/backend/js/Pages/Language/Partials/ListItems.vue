<script setup>
import DeleteButton from "./DeleteButton.vue";
import EditButton from "./EditButton.vue";

defineProps({
    items: {
        type: Array,
        required: true,
    }
});


</script>

<template>
    <div>
        <div class="bg-white rounded-lg shadow p-4">
            <div v-if="!items.length">
                <p class="text-gray-600">No items found.</p>
            </div>

            <ul class="list-disc pl-5 space-y-2">
                <li
                    v-for="item in items"
                    :key="item.id"
                    class="flex justify-between items-center text-gray-600"
                >
                    <span class="flex-1">
                        {{ item.name }}
                    </span>


                    <EditButton :item="item" />
                    <DeleteButton :item="item" />
                </li>
            </ul>
        </div>
    </div>
</template>