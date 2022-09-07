//import各种模块 dependencies
import { createApp } from "vue";
import "./style.css";
import App from "./App.vue";
import router from "./router/router.js";
import store from "./store/state.js";
import component from "./components/index.js";

//创建应用 实例化app挂载到#app =》 入口文件处
const app = createApp(App).use(router).use(store).use(component);
app.mount("#app");
