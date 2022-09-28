<template>
  <div class="container">
    <h1 class="text-center p-5">{{ product.name }}</h1>
    <div class="row d-flex justify-content-center">
      <div class="col-4">
        <div
          id="carouselExampleIndicators"
          class="carousel slide"
          data-ride="carousel"
          data-interval="false"
        >
          <ol class="carousel-indicators">
            <li
              data-target="#carouselExampleIndicators"
              data-slide-to="0"
              class="active"
            ></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img :src="product.img_path" class="d-block w-100" alt="..." />
            </div>

            <div class="carousel-item" v-if="product.img_2">
              <img :src="product.img_path2" class="d-block w-100" alt="..." />
            </div>

            <div class="carousel-item" v-if="product.img_3">
              <img :src="product.img_path3" class="d-block w-100" alt="..." />
            </div>
          </div>
          <a
            class="carousel-control-prev"
            href="#carouselExampleIndicators"
            role="button"
            data-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a
            class="carousel-control-next"
            href="#carouselExampleIndicators"
            role="button"
            data-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <!-- ######### RIGHT SIDE ########### -->
      <div class="col-4">
        <div class="name-product">
          <p><strong>Nome Prodotto:</strong> {{ product.name }}</p>
        </div>
        <div class="material-product">
          <p><strong>Materiale:</strong> {{ product.material }}</p>
        </div>
        <div class="size-product">
          <p><strong>Dimensioni:</strong> {{ product.size }} cm</p>
        </div>
        <div class="description-product">
          <p><strong>Descrizione:</strong> {{ product.description }}</p>
        </div>
        <div class="oldPrice-product">
          <p>
            <strong>Prezzo Precedente:</strong>
            <del>{{ product.old_price }}</del> €
          </p>
        </div>
        <div class="price-product">
          <p><strong>Prezzo Attuale:</strong> {{ product.price }} €</p>
        </div>

        <div class="available pt-3">
          <span v-if="product.available" class="badge badge-pill badge-success"
            >Disponibile</span
          >
          <span v-else class="badge badge-pill badge-danger">Terminato</span>
        </div>

        <div class="mt-4">
          <router-link :to="{ name: 'home' }">Torna ai Prodotti</router-link>
        </div>
      </div>
    </div>
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
.carousel-item {
  height: 360px;
}

span {
  font-size: 1.125rem;
}

a {
  font-size: 1.375rem;
}

.carousel-item img {
  max-height: 100%;
  max-width: 100%;
  vertical-align: middle;
  object-fit: contain;
}
</style>