<script setup>
import AuthenticatedLayout from '@backend/Layouts/AuthenticatedLayout.vue';
import ListLinks from './Partials/ListLinks.vue';
import AddlinkForm from './Partials/AddlinkForm.vue';
// import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { Head } from '@inertiajs/vue3';


defineProps({
    links: {
        type: Array,
        required: true,
    },
});

</script>


<template>
    <Head title="Menu" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Menu
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
                <!-- grid 3 columns -->
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-2">
                    <!-- List links -->
                    <ListLinks :links="links" />
                    <!-- Add box -->
                    <AddlinkForm />
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
