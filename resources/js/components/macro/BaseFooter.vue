<template>
  <footer>
    <div class="container pt-5">
      <div class="row d-flex align-items-center text-center">
        <div class="col-12 col-md-6">
          <h2>
            <i class="fa-solid fa-cat"></i> Bottega i Due Gatti
            <i class="fa-solid fa-cat"></i>
          </h2>
        </div>
        <div
          class="
            col-12 col-md-6
            d-flex
            justify-content-around
            align-items-center
          "
        >
          <p>I nostri Social:</p>
          <i class="fa-brands fa-facebook"></i>
          <i class="fa-brands fa-instagram"></i>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: "BaseFooter",
};
</script>

<style lang="scss" scoped>
footer {
  h2,
  .fa-brands,
  p {
    font-size: 3.125rem;
  }
  .fa-brands {
    color: var(--cafe-au-lait);
  }
}
</style>