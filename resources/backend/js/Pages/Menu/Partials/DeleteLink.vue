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
});

const confirmingLinkDeletion = ref(false);

const confirmLinkDeletion = (id) => {
    form.id = id;
    confirmingLinkDeletion.value = true;
};

const deleteLink = () => {
    form.delete(route("menu.destroy"), {
        preserveScroll: true,
        onSuccess: () => closeModal(),
    });
};

const closeModal = () => {
    confirmingLinkDeletion.value = false;
    form.clearErrors();
    form.reset();
};
</script>

<template>
    <button
        @click="confirmLinkDeletion(link.id)"
        class="ml-2 bg-red-500 text-white px-1 py-0.5 rounded hover:bg-red-600 text-sm"
    >
        Delete
    </button>

    <Modal :show="confirmingLinkDeletion" @close="closeModal">
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900">
                Are you sure you want to delete this link?
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                Once the link is deleted, it will be permanently removed from the menu.
            </p>

            <div class="mt-6 flex justify-end">
                <SecondaryButton @click="closeModal"> Cancel </SecondaryButton>

                <DangerButton @click="deleteLink"> Delete </DangerButton>
            </div>
        </div>
    </Modal>
</template>