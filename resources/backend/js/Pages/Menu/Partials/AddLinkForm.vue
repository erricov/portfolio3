<script setup>
import InputError from '@backend/Components/InputError.vue';
import InputLabel from '@backend/Components/InputLabel.vue';
import PrimaryButton from '@backend/Components/PrimaryButton.vue';
import TextInput from '@backend/Components/TextInput.vue';
import SelectInput from '@backend/Components/SelectInput.vue';
import { Link, useForm, usePage } from '@inertiajs/vue3';

// const { $inertia } = usePage();
const form = useForm({
    name: '',
    url: '',
    type: 'route',
    sort_order: 0,
});

const addLink = () => {
    form.post(route('menu.store'), {
        preserveScroll: true,
        onSuccess: () => form.reset(),
    });
};

</script>

<template>
    <div class="bg-white rounded-lg shadow p-4">
        <header>
            <h2 class="text-lg font-medium text-gray-900">
                Add Link
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                Add a new link to the menu.
            </p>
        </header>

        <form @submit.prevent="addLink" class="mt-6 space-y-6">
            <div>
                <InputLabel for="name" value="Name" />

                <TextInput
                    id="name"
                    v-model="form.name"
                    type="text"
                    class="mt-1 block w-full"
                    autocomplete="name"
                />

                <InputError
                    :message="form.errors.name"
                    class="mt-2"
                />
            </div>

            <div>
                <InputLabel for="url" value="URL" />

                <TextInput
                    id="url"
                    v-model="form.url"
                    type="text"
                    class="mt-1 block w-full"
                    autocomplete="url"
                />

                <InputError :message="form.errors.url" class="mt-2" />
            </div>

            <!-- Type -->
            <div class="flex justify-between">
                <div>
                    <InputLabel for="type" value="Type" />

                    <SelectInput
                        id="type"
                        v-model="form.type"
                        class="mt-1 block w-full"
                        :options="[
                            { value: 'url', label: 'URL' },
                            { value: 'route', label: 'Route' },
                        ]"
                    />

                    <InputError :message="form.errors.type" class="mt-2" />
                </div>
                <div>
                    <!-- sort -->
                    <InputLabel for="sort_order" value="Sort Order" />

                    <TextInput
                        id="sort_order"
                        v-model="form.sort_order"
                        type="number"
                        class="mt-1 block w-full"
                        autocomplete="sort_order"
                    />

                    <InputError :message="form.errors.sort_order" class="mt-2" />
                </div>
            </div>
           

            <div>
                <button
                    type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Add Link
                </button>
            </div>
        </form>
    </div>
</template>
