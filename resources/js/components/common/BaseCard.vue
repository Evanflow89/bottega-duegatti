.<template>
  <div class="card">
    <div class="image-card d-flex justify-content-center align-items-center">
      <img :src="item.img_path" alt="" />
    </div>
    <div class="name-card">
      <h3 class="text-center pt-2">{{ item.name }}</h3>
    </div>

    <div class="prices">
      <h5>
        <del>{{ item.old_price }} €</del>
      </h5>
      <div class="row d-flex align-items-center">
        <div class="col-6 d-flex align-items-center">
          <h4>{{ item.price }} €</h4>
        </div>
        <div class="col-6 d-flex align-items-center">
          <router-link
            :to="{ name: 'single-product', params: { id: item.id } }"
            class="btn btn-outline-info"
            >Vai Alla Scheda</router-link
          >
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "BaseCard",
  props: ["item"],
};
</script>

<style lang="scss" scoped>
.card {
  background-color: inherit;
  border-radius: 1.25rem;
  padding: 0.625rem;
  box-shadow: 0 0 5px 2px #ddd;
}

a {
  text-decoration: none;
  color: white;
  font-size: 1.25rem;
}

h4,
h5 {
  margin-bottom: 0;
}

.image-card {
  max-height: 21.875rem;
  height: 100%;
}

.image-card img {
  max-height: 100%;
  max-width: 100%;
  vertical-align: middle;
  border-radius: 1.25rem;
}

.btn {
  border-radius: 1.25rem;
}

.name-card {
  display: flex;
  flex-grow: 1;
}

del {
  color: red;
}
//
</style>