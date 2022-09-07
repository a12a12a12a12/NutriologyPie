import { createRouter, createWebHashHistory } from "vue-router";
import Login from "../page/login.vue";
import Profile from "../page/profile.vue";
import Home from "../page/home.vue";
import Expert from "../page/experts.vue";

const routes = [
  { name: "Login", path: "/login", component: Login },
  { name: "Profile", path: "/profile", component: Profile },
  { name: "Home", path: "/", component: Home },
  { name: "Expert", path: "/experts", component: Expert },
];

const router = createRouter({
  history: createWebHashHistory(),
  routes,
});

export default router;
