<template>
  <b-card 
      :title="infoOfertaCompleta.titol"
      tag="article"
      style="max-width: 20rem"
      class="mb-2"
  >
      <b-card-text>
          {{ this.infoOfertaCompleta.empresa_id.nom }}
      </b-card-text>
      <b-card-text>
          {{ this.infoOfertaCompleta.categoria_id.descripcio }}
      </b-card-text>
      <b-card-text>
          {{ this.infoOfertaCompleta.ubicacio }}
      </b-card-text>
      <b-card-text>
          {{ this.infoOfertaCompleta.descripcio }}
      </b-card-text>
      <b-card-text>
          {{ this.infoOfertaCompleta.data_publicacio }}
      </b-card-text>
  </b-card>
</template>

<script>
export default {
  name: 'FichaOfertaCompleta',
  props: {
    infoOfertaCompleta: {}
  },  
}
</script>

<style>
</style>
