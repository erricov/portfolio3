// useBodyClass.js
import { watch } from 'vue';
import { usePage } from '@inertiajs/vue3';

export function useBodyClass() {
    const page = usePage();
    console.log(page);
    watch(
        () => page.value.component,
        (newComponent) => {
            document.body.className = ''; // Clear existing classes
            document.body.classList.add(`page-${newComponent}`);
        },
        { immediate: true }
    );
}