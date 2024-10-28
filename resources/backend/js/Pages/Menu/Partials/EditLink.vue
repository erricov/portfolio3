<script setup>
import { ref, nextTick } from "vue";
import { useForm } from "@inertiajs/vue3";
import DangerButton from "@backend/Components/DangerButton.vue";
import Modal from "@backend/Components/Modal.vue";
import SecondaryButton from "@backend/Components/SecondaryButton.vue";

defineProps({
    link: {
        type: Object,
        required: true,
    },
});

const form = useForm({
    id: "",
    name: "",
    url: "",
});

const openModal = ref(false);

const openingModal = (link) => {
    form.id = link.id;
    form.name = link.name;
    form.url = link.url;
    openModal.value = true;
};

const closeModal = () => {
    openModal.value = false;
    form.clearErrors();
    form.reset();
};

const updateLink = () => {
    form.put(route("menu.update"), {
        preserveScroll: true,
        onSuccess: () => closeModal(),
    });
};
</script>

<template>
    <button
        class="bg-blue-500 text-white px-1 py-0.5 rounded hover:bg-blue-600 text-sm"
        @click="openingModal(link)"
    >
        Edit
    </button>


    <Modal :show="openModal" @close="closeModal">
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900">
                Edit Link
            </h2>

            <form @submit.prevent="updateLink" class="mt-6">
                <div class="mt-6">
                    <label for="name" class="block text-sm font-medium text-gray-700">
                        Name
                    </label>
                    <input
                        v-model="form.name"
                        type="text"
                        name="name"
                        id="name"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    />
                    <p class="mt-2 text-sm text-red-600" v-if="form.errors.name">{{ form.errors.name }}</p>
                </div>

                <div class="mt-6">
                    <label for="url" class="block text-sm font-medium text-gray-700">
                        URL
                    </label>
                    <input
                        v-model="form.url"
                        type="text"
                        name="url"
                        id="url"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    />
                    <p class="mt-2 text-sm text-red-600" v-if="form.errors.url">{{ form.errors.url }}</p>
                </div>

                <div class="mt-6 flex justify-end">
                    <SecondaryButton @click="closeModal"> Cancel </SecondaryButton>
                    <DangerButton type="submit" class="ml-2"> Save </DangerButton>
                </div>
            </form>
        </div>
    </Modal>
</template>