<template>
  <div>
    <BaseHeader />
    <HeroMain />
    <HeroBottom />
    <BaseMain />
  </div>
</template>

<script>
import BaseHeader from "../components/macro/BaseHeader.vue";
import HeroMain from "../components/sections/HeroMain.vue";
import HeroBottom from "../components/sections/HeroBottom.vue";
import BaseMain from "../components/macro/BaseMain.vue";
export default {
  name: "App",
  components: {
    BaseHeader,
    HeroMain,
    HeroBottom,
    BaseMain,
  },
};
</script>

<style>
</style>