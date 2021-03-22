<template>
  <div>
    <b-navbar toggleable="lg" type="dark" variant="dark">
      <b-container>
        <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>
        <b-navbar-brand href="#">Linkolvin</b-navbar-brand>
      </b-container>
      <b-button variant="primary" href="http://localhost:8000/login"
        >Iniciar Sesión</b-button
      >
      <b-button variant="primary">Registrarte</b-button>
    </b-navbar>
  </div>
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
</style>