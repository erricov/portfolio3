<script setup>
import InputError from '@backend/Components/InputError.vue';
import InputLabel from '@backend/Components/InputLabel.vue';
import PrimaryButton from '@backend/Components/PrimaryButton.vue';
import TextInput from '@backend/Components/TextInput.vue';
import SelectInput from '@backend/Components/SelectInput.vue';
import { useForm } from '@inertiajs/vue3';

const props = defineProps({
    addRoute: {
        type: String,
        required: true,
    },
});
const form = useForm({
    name: '',
    code: '',
    is_rtl: 0,
    is_default: 0,
    sort_order: 0,
    is_enabled: 1,
    flag: '',
    locale: '',
    date_format: '',
    time_format: '',
    datetime_format: '',
    currency: '',
});

const addItem = () => {
    form.post(route(props.addRoute), {
        preserveScroll: true,
        onSuccess: () => form.reset(),
    });
};
</script>

<template>
    <div class="bg-white rounded-lg shadow p-4">
        <header>
            <h2 class="text-lg font-medium text-gray-900">
                Add Item
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                Add a new language.
            </p>
        </header>

        <form @submit.prevent="addItem" class="mt-6 space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <InputLabel for="name" :value="'Name'" />
                    <TextInput
                        id="name"
                        v-model="form.name"
                        type="text"
                        class="mt-1 block w-full"
                        :class="{ 'border-red-500': form.errors.name }"
                    />
                    <InputError :message="form.errors.name" />
                </div>
                <div>
                    <InputLabel for="code" :value="'Code'" />
                    <TextInput
                        id="code"
                        v-model="form.code"
                        type="text"
                        class="mt-1 block w-full"
                        :class="{ 'border-red-500': form.errors.code }"
                    />
                    <InputError :message="form.errors.code" />
                </div>
                <div>
                    <InputLabel for="is_rtl" :value="'Is RTL'" />
                    <SelectInput
                        id="is_rtl"
                        v-model="form.is_rtl"
                        class="mt-1 block w-full"
                        :class="{ 'border-red-500': form.errors.is_rtl }"
                    >
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </SelectInput>
                    <InputError :message="form.errors.is_rtl" />
                </div>
                <div>
                    <InputLabel for="is_default" :value="'Is Default'" />
                    <SelectInput
                        id="is_default"
                        v-model="form.is_default"
                        class="mt-1 block w-full"
                        :class="{ 'border-red-500': form.errors.is_default }"
                    >
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </SelectInput>
                    <InputError :message="form.errors.is_default" />
                </div>
                <div>
                    <InputLabel for="sort_order" :value="'Sort Order'" />
                    <TextInput
                        id="sort_order"
                        v-model="form.sort_order"
                        type="number"
                        class="mt-1 block w-full"
                        value="0"
                        :class="{ 'border-red-500': form.errors.sort_order }"
                    />
                    <InputError :message="form.errors.sort_order" />
                </div>
                <div>
                    <InputLabel for="is_enabled" :value="'Is Enabled'" />
                    <SelectInput
                        id="is_enabled"
                        v-model="form.is_enabled"
                        class="mt-1 block w-full"
                        :class="{ 'border-red-500': form.errors.is_enabled }"
                    >
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </SelectInput>
                    <InputError :message="form.errors.is_enabled" />
                </div>
                <div>
                    <InputLabel for="flag" :value="'Flag'" />
                    <TextInput
                        id="flag"
                        v-model="form.flag"
                        type="text"
                        class="mt-1 block w-full"
                        :class="{ 'border-red-500': form.errors.flag }"
                    />
                    <InputError :message="form.errors.flag" />
                </div>
                <div>
                    <InputLabel for="locale" :value="'Locale'" />
                    <TextInput
                        id="locale"
                        v-model="form.locale"
                        type="text"
                        class="mt-1 block w-full"
                        :class="{ 'border-red-500': form.errors.locale }"
                    />
                    <InputError :message="form.errors.locale" />
                </div>
                <div>
                    <InputLabel for="date_format" :value="'Date Format'" />
                    <TextInput
                        id="date_format"
                        v-model="form.date_format"
                        type="text"
                        class="mt-1 block w-full"
                        :class="{ 'border-red-500': form.errors.date_format }"
                    />
                    <InputError :message="form.errors.date_format" />
                </div>
                <div>
                    <InputLabel for="time_format" :value="'Time Format'" />
                    <TextInput
                        id="time_format"
                        v-model="form.time_format"
                        type="text"
                        class="mt-1 block w-full"
                        :class="{ 'border-red-500': form.errors.time_format }"
                    />
                    <InputError :message="form.errors.time_format" />
                </div>
                <div>
                    <InputLabel for="datetime_format" :value="'Datetime Format'" />
                    <TextInput
                        id="datetime_format"
                        v-model="form.datetime_format"
                        type="text"
                        class="mt-1 block w-full"
                        :class="{ 'border-red-500': form.errors.datetime_format }"
                    />
                    <InputError :message="form.errors.datetime_format" />
                </div>
                <div>
                    <InputLabel for="currency" :value="'Currency'" />
                    <TextInput
                        id="currency"
                        v-model="form.currency"
                        type="text"
                        class="mt-1 block w-full"
                        :class="{ 'border-red-500': form.errors.currency }"
                    />
                    <InputError :message="form.errors.currency" />
                </div>
            </div>

            <div>
                <button
                    type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Add Item
                </button>
            </div>
        </form>
    </div>
</template>