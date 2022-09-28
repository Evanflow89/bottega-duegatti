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
  background-color: var(--smoky-black);
}
</style>