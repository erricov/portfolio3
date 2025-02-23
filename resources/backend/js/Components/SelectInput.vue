<script setup>
import { ref, watch } from "vue";

const props = defineProps({
    modelValue: {
        type: String,
        default: "",
    },
});

const emit = defineEmits(["update:modelValue"]);

const model = ref(props.modelValue);

// Sincronizar el valor del modelo con el valor del prop `modelValue`
watch(
    () => props.modelValue,
    (newValue) => {
        model.value = newValue;
    }
);

// Emitir los cambios de `model` hacia el `v-model` en el padre
watch(model, (newValue) => {
    emit("update:modelValue", newValue);
});
</script>

<template>
    <select
        v-model="model"
        id="type"
        class="rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
    >
        <slot></slot>
    </select>
</template>
