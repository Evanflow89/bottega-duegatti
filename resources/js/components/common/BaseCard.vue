.<template>
  <div class="card">
    <h3>{{ item.name }}</h3>
    <div class="card-content">
      {{ item.description }}
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
  background-color: #fff;
  border-radius: 1.25rem;
  padding: 0.625rem;
  box-shadow: 0 0 5px 2px #ddd;
}
</style>