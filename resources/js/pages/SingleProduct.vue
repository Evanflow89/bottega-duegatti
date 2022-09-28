<template>
  <div class="container">
    <h1>{{ product.name }}</h1>
  </div>
</template>

<script>
export default {
  name: "SingleProduct",
  data() {
    return {
      product: null,
    };
  },
  created() {
    axios.get(`/api/products/${this.$route.params.id}`).then((response) => {
      this.product = response.data;
    });
  },
};
</script>

<style lang="scss" scoped>
</style>