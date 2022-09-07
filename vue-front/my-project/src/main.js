import { createApp } from "vue";
import "./style.css";
import App from "./App.vue";
import router from "./router/router.js";
import store from "./store/state.js";
import ElementPlus from "element-plus";
import "element-plus/dist/index.css";
import component from "./components/index.js";

const app = createApp(App)
  .use(router)
  .use(store)
  .use(ElementPlus)
  .use(component);
app.mount("#app");
