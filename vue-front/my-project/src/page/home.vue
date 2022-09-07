<template>
  <div class="h-full">
    <top></top>
    <div
      class="mt-5 text-center font-bold text-2xl tracking-wider text-slate-500 capitalize hover:text-blue-600 hover:lowercase"
    >
      this is home page
    </div>

    <button class="bg-[#0000FF] w-[100px]">456</button>
  </div>
</template>
<script>
import top from "../components/Header.vue";
export default {
  name: "homepage",
  components: {
    top,
  },
};
</script>
<style></style>
