<template>
  <section class="heroBottom">
    <div class="container heroBottom-section">
      <div class="row pt-5 pb-5">
        <div
          class="
            col-12 col-xl-6
            d-flex
            justify-content-center
            align-items-center
          "
        >
          <img
            class="img-heroBottom img-fluid"
            src="../img/benjamin-lehman-EJU7A__krX0-unsplash.jpg"
            alt=""
          />
        </div>
        <div class="col-12 col-xl-6 d-flex align-items-center">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium,
          odit dolore. Veniam placeat itaque mollitia dignissimos sapiente
          laboriosam ex fugit, fugiat animi molestiae incidunt dolore debitis
          optio maxime deserunt? Laudantium. Rerum tenetur sunt similique
          minima. Nesciunt praesentium minus mollitia dolorem delectus, quas
          adipisci ullam odio, fuga consectetur veniam, cupiditate ipsam unde
          tenetur. Sed illo et, nihil recusandae quos assumenda tenetur! Sequi
          fugit laboriosam corrupti, repudiandae nulla odio natus eius obcaecati
          error minima facilis similique adipisci hic fuga? Exercitationem sunt
          eveniet tempora necessitatibus ea officia? Quasi voluptas ipsa aut
          officia nihil?
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "HeroMain",
};
</script>

<style lang="scss" scoped>
.heroBottom {
  background-image: url("../img/hero2.jpg");
  background-size: cover;
  background-position: center;
}

.heroBottom-section {
  background-color: rgba($color: #000000, $alpha: 0.3);
}

.img-heroBottom {
  max-height: 400px;
  border-radius: 10px;
}
</style>