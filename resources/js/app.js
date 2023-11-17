import { createApp } from 'vue';
import App from './App.vue';
import router from './router.js';
import store from "./store/store.js"; // Import your Vuex store

createApp(App)
  .use(router)
  .use(store) // Use the Vuex store
  .mount("#app");
