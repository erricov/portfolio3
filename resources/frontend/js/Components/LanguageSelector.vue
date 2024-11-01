<template>
    <div class="dropdown">
        <button class="dropdown-toggle" @click="toggleDropdown">
            <img :src="selectedFlag" alt="Selected Flag" class="flag-icon" />
        </button>
        <div :class="['dropdown-menu', { 'dropdown-menu-open': isOpen }]">
            <div
                v-for="(flag, lang) in flags"
                :key="lang"
                @click="selectLanguage(lang)"
                class="dropdown-item"
            >
                <img :src="flag" :alt="lang" class="flag-icon" />
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, reactive, onMounted, getCurrentInstance } from "vue";
// import axios from "axios";
import axios from "axios";

const isOpen = ref(false);
const selectedFlag = ref("");
const flags = reactive({
    es: "https://flagcdn.com/w20/es.png",
    en: "https://flagcdn.com/w20/us.png",
    it: "https://flagcdn.com/w20/it.png",
});

onMounted(() => {
    selectedFlag.value = flags.es;
});

const toggleDropdown = () => {
    isOpen.value = !isOpen.value;
};

const { emit } = getCurrentInstance();

// const selectedLanguage = ref("es");
const selectLanguage = (lang) => {
    selectedFlag.value = flags[lang];
    isOpen.value = false;
    
    console.log('Selected language:', lang);

    axios.post(route('language.change'), { locale: lang }, {
        preserveState: true, // Esto mantiene el estado de la página
        onSuccess: () => {
            location.reload(); // Recargar para aplicar el idioma
        },
    });

};

</script>

<style>
.dropdown {
    position: relative;
    display: inline-block;
    background-color: #f0f0f0;
    border-radius: 5px;
}   

.dropdown-toggle {
    background: none;
    border: none;
    cursor: pointer;
    padding: 5px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    display: flex;
    align-items: center;
}

.dropdown-toggle:hover {
    background-color: #f0f0f0;
}

.dropdown-menu {
    display: none;
    position: absolute;
    background-color: white;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 1;
    margin-top: 5px;
    border-radius: 5px;
    overflow: hidden;
    transition: opacity 0.3s ease, transform 0.3s ease;
    opacity: 0;
    transform: translateY(-10px);
    width: 50px;
    min-width: unset!important;
}

.dropdown-menu-open {
    display: block;
    opacity: 1;
    transform: translateY(0);
}

.dropdown-item {
    padding: 0px 15px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.dropdown-item:hover {
    background-color: #f0f0f0;
}

.flag-icon {
    width: 20px;
    height: 15px;
    margin-right: 5px;
}
</style>