<template>
  <div>
    <BaseHeader />
    <HeroMain />
    <BaseMain />
    <ContactUs />
  </div>
</template>

<script>
import BaseHeader from "../components/macro/BaseHeader.vue";
import HeroMain from "../components/sections/HeroMain.vue";
import BaseMain from "../components/macro/BaseMain.vue";
import ContactUs from "../components/sections/ContactUs.vue";
export default {
  name: "App",
  components: {
    BaseHeader,
    HeroMain,
    BaseMain,
    ContactUs,
  },
};
</script>

<style>
</style>