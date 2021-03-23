<template>
  <div>
    <b-card 
        :title="infoOferta.titol"
        tag="article"
        style="max-width: 20rem"
        class="mb-2"
        @click="pasarOfertaCompletaSeleccionada"
        v-b-modal.modalOfertaCompleta
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
