<template>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"
          ><i class="fa-solid fa-cat"></i> Bottega i Due Gatti
          <i class="fa-solid fa-cat"></i
        ></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNav"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#ChiSiamo"
                >Chi Siamo</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Prodotti">Prodotti</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Contatti">Contatti</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
</template>

<script>
export default {
  name: "BaseHeader",
};
</script>

<style lang="scss" scoped>
header {
  font-family: "Amatic SC", cursive;
  font-size: 40px;
  a {
    font-size: 50px;
  }
  .white {
    color: white;
  }

  .navbar-custom {
    background-image: url("../img/sfondo.jpg");
    background-size: cover;
    background-position: center;
    a {
      color: var(--cafe-au-lait);
    }

    .active {
      color: white;
    }
  }

  .nav-menu {
    display: flex;
    justify-content: space-between;
  }
}
</style>