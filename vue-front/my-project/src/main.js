import { createApp } from "vue";
import "./style.css";
import App from "./App.vue";
import router from "./router/router.js";
import store from "./store/state.js";

createApp(App).use(router).use(store).mount("#app");
