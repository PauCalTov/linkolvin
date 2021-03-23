<template>
  <div>
    <b-navbar toggleable="lg" type="dark" variant="dark">
      <b-navbar-brand href="#">Linkolvin</b-navbar-brand>

      <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

      <b-collapse id="nav-collapse" is-nav>
    
        <!-- Right aligned nav items -->
        <b-navbar-nav class="ml-auto">
          <!-- <b-nav-form>
            <b-form-input size="sm" class="mr-sm-2" placeholder="Search"></b-form-input>
            <b-button size="sm" class="my-2 my-sm-0" type="submit">Search</b-button>
          </b-nav-form> -->
          <b-button size="sm" class="my-2 my-sm-0 btn-space" href="http://localhost:8000/login">Iniciar Sesión</b-button>
          <b-button size="sm" class="my-2 my-sm-0">Registrarte</b-button>
        </b-navbar-nav>
      </b-collapse>
    </b-navbar>
  </div>
  <!-- <div>
    <b-navbar toggleable="lg" type="dark" variant="dark">
      <b-container>
        <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>
        <b-navbar-brand href="#">Linkolvin</b-navbar-brand>
      </b-container>
      <b-button variant="primary" href="http://localhost:8000/login">Iniciar Sesión</b-button>
      <b-button variant="primary">Registrarte</b-button>
    </b-navbar>
  </div> -->
</template>

<script>
export default {
  name: "Header",
  props: {
    msg: String,
  },
};
</script>

<style>
.btn-space {
    margin-right: 5px;
}
</style>