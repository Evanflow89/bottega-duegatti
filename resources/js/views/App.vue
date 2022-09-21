<template>
  <div>
    <BaseHeader />
    <HeroMain />
  </div>
</template>

<script>
import BaseHeader from "../components/macro/BaseHeader.vue";
import HeroMain from "../components/sections/HeroMain.vue";
export default {
  name: "App",
  components: {
    BaseHeader,
    HeroMain,
  },
  data() {
    return {
      products: [],
    };
  },
  created() {
    axios
      .get("http://127.0.0.1:8000/api/products")
      .then((response) => {
        this.products = response.data;
      })
      .catch((e) => {
        console.log(e);
      });
  },
};
</script>

<style>
</style>