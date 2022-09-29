<template>
  <section class="ContactUs">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center pt-5">
          <h1>Contattaci</h1>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-8">
          <form
            method="POST"
            action="mailto: ivanbaragone@gmail.com"
            enctype="multipart/form-data"
          >
            <div class="form-group">
              <label for="tuoNome">Il Tuo Nome</label>
              <input
                type="text"
                class="form-control"
                id="tuoNome"
                placeholder="Inserisci il tuo nome"
              />
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Il Tuo Indirizzo Email</label>
              <input
                type="email"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Inserisci la tua email"
              />
              <small id="emailHelp" class="form-text text-muted"
                >Non condivideremo il tuo indirizzo email con nessun
                altro.</small
              >
            </div>
            <label>Seleziona il prodotto:</label>

            <div class="form-check form-check-inline row d-flex flex-wrap">
              <div
                v-for="product in products"
                class="d-flex col-5 col-md-4 pt-2"
              >
                <input
                  class="form-check-input"
                  type="checkbox"
                  id="product.id"
                  value="product.name"
                />
                <label class="form-check-label" for="inlineCheckbox1">{{
                  product.name
                }}</label>
              </div>
            </div>

            <div class="form-group pt-3">
              <label for="exampleFormControlTextarea1">Il Tuo Messaggio</label>
              <textarea
                class="form-control"
                id="exampleFormControlTextarea1"
                rows="3"
              ></textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "ContactUs",
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