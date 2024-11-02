<template>
    <div class="locale-changer">
        <div class="dropdown">
            <button class="dropdown-toggle">
                <img :src="flags[$i18n.locale]" class="flag-icon" />
            </button>
            <div class="dropdown-menu">
            <div v-for="locale in $i18n.availableLocales" :key="`locale-${locale}`" class="dropdown-item" @click="$i18n.locale = locale">
                <img :src="flags[locale]" class="flag-icon" /> 
                <div class="locale-name ">
                    - {{ locale }}
                </div>
            </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, reactive, onMounted, getCurrentInstance } from "vue";

const flags = reactive({
    es: "https://flagcdn.com/w20/es.png",
    en: "https://flagcdn.com/w20/us.png",
    it: "https://flagcdn.com/w20/it.png",
});

// const $i18n = getCurrentInstance().appContext.config.globalProperties.$i18n;

onMounted(() => {
    let dropdown = document.querySelector(".dropdown");
    dropdown.addEventListener("click", (e) => {
        dropdown.querySelector(".dropdown-menu").classList.toggle("dropdown-menu-open");
    });
});



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
    width: 80px;
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
    display: flex;
    align-content: center;
    justify-content: center;
    margin-bottom: 6px;
}

.locale-name {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.8rem;
    font-weight: 500;
    color: #333;
    width: 20px;
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