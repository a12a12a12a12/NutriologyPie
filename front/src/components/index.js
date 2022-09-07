//注册全局组件： header footer eg...

import navi from "./Header.vue";

export default function install(app) {
  app.component("navi", navi);
}
