.<template>
  <div class="card">
    <div class="image-card d-flex justify-content-center align-items-center">
      <img :src="item.img_path" alt="" />
    </div>
    <div class="name-card">
      <h3 class="text-center pt-2">{{ item.name }}</h3>
    </div>
    <router-link :to="{ name: 'single-product', params: { id: item.id } }"
      >Vai Alla Scheda</router-link
    >
    <div class="prices">
      <h5>
        <del>{{ item.old_price }} €</del>
      </h5>
      <h4>{{ item.price }} €</h4>
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

.name-card {
  display: flex;
  flex-grow: 1;
}

del {
  color: red;
}
//
</style>