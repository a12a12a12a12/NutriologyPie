//注册全局组件： header footer eg...

import header from "./Header.vue";

export default function install(app) {
  app.component("top", header);
}
