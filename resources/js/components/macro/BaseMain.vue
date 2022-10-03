<template>
  <main id="Prodotti">
    <router-view></router-view>
  </main>
</template>

<script>
export default {
  name: "BaseMain",
};
</script>

<style lang="scss" scoped>
main {
  background-image: url("../img/main.jpg");
  background-position: center;
}
</style>