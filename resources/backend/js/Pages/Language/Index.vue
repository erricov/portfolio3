<script setup>
import AuthenticatedLayout from '@backend/Layouts/AuthenticatedLayout.vue';
import ListItems from './Partials/ListItems.vue';
import AddForm from './Partials/AddForm.vue';
import { Head } from '@inertiajs/vue3';


defineProps({
    items: {
        type: Array,
        required: true,
    },
});

</script>


<template>
    <Head title="Languages" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Languages
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
                <!-- grid 3 columns -->
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-2">
                    <!-- List items -->
                    <ListItems :items="items" />
                    <!-- Add box -->
                    <AddForm :addRoute="'language.store'" />
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
