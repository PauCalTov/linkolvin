<template>
  <div>
    <b-card 
        :title="infoOferta.titol"
        tag="article"
        style="max-width: 20rem"
        class="mb-2"
    >
        <b-card-text>
            {{ this.infoOferta.descripcio }}
        </b-card-text>
    </b-card>
  </div>
</template>

<script>
export default {
  name: 'FichaOferta',
  props: {
    infoOferta: Object,
  }
}
</script>

<style>
</style>
