<template>
  <div>
    <h1>VueJs</h1>
  </div>
</template>

<script>
export default {
  name: "App",
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