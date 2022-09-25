<template>
  <section class="hero mt-2">
    <div class="container hero-section" id="#ChiSiamo">
      <div class="row">
        <div class="col-12 col-xl-6 d-flex align-items-center content-hero">
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
          officia nihil? Est et quas dignissimos a suscipit doloremque ex culpa
          dicta eius magnam vel sed corporis neque officiis iure quis velit cum
          harum qui, reiciendis quidem quaerat ipsam? Fuga, similique ex. Veniam
          eum temporibus totam amet blanditiis quibusdam recusandae facere ipsa
          dolorum corrupti, odit quos fugiat, error illum voluptate iure. Dicta
          doloremque molestias in placeat sint illum maiores enim nobis
          consectetur. Odit debitis alias quam veniam numquam. Nulla maiores vel
          ducimus iusto quos at cumque nostrum a quidem iste recusandae voluptas
          totam quod nam dignissimos neque ipsam, velit eaque excepturi
          nesciunt.
        </div>
        <div
          class="
            col-12 col-xl-6
            d-flex
            justify-content-center
            align-items-center
            img-hero
          "
        >
          <img
            class="img-hero img-fluid"
            src="../img/carter-yocham-JTuuDH9uFlg-unsplash.jpg"
            alt=""
          />
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
.hero {
  background-image: url("../img/hero.jpg");
  background-size: cover;
  background-position: center;
}

.hero-section {
  background-color: rgba($color: #000000, $alpha: 0.3);
  padding-top: 200px;
  padding-bottom: 200px;
}

.img-hero {
  max-height: 400px;
  border-radius: 10px;
}
</style>