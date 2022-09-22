<template>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1>I nostri Prodotti</h1>
        </div>
      </div>
      <BaseCard
        v-for="product in products"
        v-bind:item="product"
        v-bind:key="product.item"
      />
    </div>
  </main>
</template>

<script>
import BaseCard from "../common/BaseCard.vue";
export default {
  name: "BaseMain",
  components: {
    BaseCard,
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

<style lang="scss" scoped>
</style>