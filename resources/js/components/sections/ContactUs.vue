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
          <form @submit.prevent="sendEmail">
            <div class="form-group">
              <label for="tuoNome">Il Tuo Nome</label>
              <input
                type="text"
                v-model="name"
                name="name"
                class="form-control"
                placeholder="Inserisci il tuo nome"
              />
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Il Tuo Indirizzo Email</label>
              <input
                type="email"
                v-model="email"
                name="email"
                class="form-control"
                aria-describedby="emailHelp"
                placeholder="Inserisci la tua email"
              />
              <small id="emailHelp" class="form-text text-muted"
                >Non condivideremo il tuo indirizzo email con nessun
                altro.</small
              >
            </div>
            <label>Seleziona il prodotto:</label>

            <div class="form-check form-check-inline">
              <div v-for="product in products">
                <input
                  class="form-check-input"
                  v-model="checkedProducts"
                  type="checkbox"
                  :id="product.id"
                  :value="product.name"
                />
                <label class="form-check-label" for="inlineCheckbox1">{{
                  product.name
                }}</label>
              </div>
            </div>

            <div>Checked names: {{ checkedProducts }}</div>
            <div class="form-group pt-3">
              <label for="exampleFormControlTextarea1">Il Tuo Messaggio</label>
              <textarea
                name="message"
                v-model="message"
                class="form-control"
                rows="3"
              ></textarea>
            </div>

            <button type="submit" value="send" class="btn btn-primary mt-4">
              Submit
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import emailjs from "emailjs-com";
export default {
  name: "ContactUs",
  data() {
    return {
      products: [],
      name: "",
      email: "",
      message: "",
      to_name: "Bottega i Due Gatti",
      checkedProducts: [],
    };
  },
  methods: {
    sendEmail(e) {
      try {
        emailjs.sendForm(
          "service_o26hno8",
          "template_kgnvz7c",
          this.$refs.form,
          "pYpaUviXY0oc4eRyf",
          {
            name: this.name,
            checkedProducts: this.checkedProducts,
            email: this.email,
            message: this.message,
          }
        );
      } catch (error) {
        console.log({ error });
      }
      // Reset form field
      this.name = "";
      this.email = "";
      this.message = "";
      this.checkedProducts = "";
    },
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