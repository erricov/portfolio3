import { createI18n } from 'vue-i18n';
import enHeader from './Translations/en/header.js';
import esHeader from './Translations/es/header.js';
import itHeader from './Translations/it/header.js';

import enHomepage from './Translations/en/homepage.js';
import esHomepage from './Translations/es/homepage.js';
import itHomepage from './Translations/it/homepage.js';

// resources\frontend\js\Translations\en\common.js

const i18n = createI18n({
  locale: 'es',
  fallbackLocale: 'en',
  messages: {
    en: {
      header: enHeader,
      homepage: enHomepage,
      // Importa altre sezioni qui
    },
    es: {
      header: esHeader,
      homepage: esHomepage,
    },
    it: {
        header: itHeader,
        homepage: itHomepage,
      },
  },
});

export default i18n;
