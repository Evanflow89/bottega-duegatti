<template>
  <div class="container">
    <h1 class="text-center">Pagina non trovata!</h1>
    <p class="text-center">
      <router-link :to="{ name: 'home' }">Torna indietro</router-link>
    </p>
  </div>
</template>

<script>
export default {
  name: "Page404",
};
</script>

<style>
</style>