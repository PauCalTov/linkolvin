<template>
    <b-card 
        :title="infoOferta.titol"
        :img-src="`https://source.unsplash.com/featured/?${infoOferta.ubicacio}`"
        img-alt="Image"
        img-top
        img-height="200"
        img-width="200"
        tag="article"
        style="max-width: 20rem"
        class="mb-2"
        @click="pasarOfertaCompletaSeleccionada"
        v-b-modal.modalOfertaCompleta
    >
        <b-card-text>
            {{ this.infoOferta.descripcio }}
        </b-card-text>
        <small class="text-muted">Last updated 5 mins ago</small>
    </b-card>
</template>
<script>

export default {
  name: 'FichaOferta',
  props: {
    infoOferta: {}
  },
  methods : {
    pasarOfertaCompletaSeleccionada: function(){
      console.log(this.infoOferta.id);
      this.axios.get('http://labs.iam.cat/~a18kevlarpal/transversal3/api.php/records/oferta?join=empresa&join=categoria&filter=id,eq,'+this.infoOferta.id).then((response) => {
        console.log(response.data.records[0]);
        this.$parent.modal=response.data.records[0];
      })
    }
  }
}
</script>

<style>
</style>
