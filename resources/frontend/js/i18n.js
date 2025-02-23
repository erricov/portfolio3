import { createI18n } from 'vue-i18n';
import enHeader from './Translations/en/header.js';
import esHeader from './Translations/es/header.js';
import itHeader from './Translations/it/header.js';

import enHomepage from './Translations/en/homepage.js';
import esHomepage from './Translations/es/homepage.js';
import itHomepage from './Translations/it/homepage.js';

import enAbout from './Translations/en/about-me.js';
import esAbout from './Translations/es/about-me.js';
import itAbout from './Translations/it/about-me.js';

import enServices from './Translations/en/services.js';
import esServices from './Translations/es/services.js';
import itServices from './Translations/it/services.js';

import enContact from './Translations/en/contact.js';
import esContact from './Translations/es/contact.js';
import itContact from './Translations/it/contact.js';

const i18n = createI18n({
  locale: 'en',
  fallbackLocale: 'en',
  messages: {
    en: {
      header: enHeader,
      homepage: enHomepage,
      about: enAbout,
      services: enServices,
      contact: enContact,
    },
    es: {
      header: esHeader,
      homepage: esHomepage,
      about: esAbout,
      services: esServices,
      contact: esContact,
    },
    it: {
      header: itHeader,
      homepage: itHomepage,
      about: itAbout,
      services: itServices,
      contact: itContact,
    },
  },
});

export default i18n;
