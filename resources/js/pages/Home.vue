<template>
  <div class="container main-content">
    <div class="row">
      <div class="col-12 text-center p-5">
        <h1>I nostri Prodotti</h1>
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <BaseCard
        class="col-12 col-md-5 col-xl-3 m-2"
        v-for="product in products"
        v-bind:item="product"
        v-bind:key="product.item"
      />
    </div>
  </div>
</template>

<script>
import BaseCard from "../components/common/BaseCard.vue";
export default {
  name: "Home",
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
.main-content {
  background-color: rgba($color: #000000, $alpha: 0.4);
}
</style>