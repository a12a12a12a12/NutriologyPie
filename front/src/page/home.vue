<template>
  <div class="h-full home">
    <navi></navi>
    <div
      class="test mt-5 text-center font-bold text-2xl tracking-wider text-slate-500 capitalize hover:text-blue-600 hover:lowercase"
    >
      this is home page
    </div>
    <button class="bg-[#0000FF] w-[100px]">456</button>
  </div>
</template>
<script></script>

// scoped to apply styles only to this component
<style scoped>
.test {
  color: red;
}
</style>

<!-- import single components 局部引用模板
// import top from "../components/Header.vue";
// export default {
//   name: "homepage",
//   components: {
//     top,
//   },
// }; -->
