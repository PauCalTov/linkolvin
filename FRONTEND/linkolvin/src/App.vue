<template>
  <div>
    <Header/>
    <div id="principal">
      <h1>OFERTAS ACTUALES</h1>
      <b-dropdown text="Filtrar por categoría" class="m-md-2">
        <b-dropdown-item-button @click="todo">TODO</b-dropdown-item-button>
        <b-dropdown-item-button @click="asix">ASIX</b-dropdown-item-button>
        <b-dropdown-item-button @click="daw">DAW</b-dropdown-item-button>
        <b-dropdown-item-button @click="dam">DAM</b-dropdown-item-button>
        <b-dropdown-item-button @click="smx">SMX</b-dropdown-item-button>
      </b-dropdown>
      <b-row class="justify-content-md-center">
        <b-card-group deck>
          <FichaOferta v-for="oferta in resultado"
            :key="oferta.id"
            :infoOferta="oferta">
          </FichaOferta>
        </b-card-group>
      </b-row>
      <b-modal id="modalOfertaCompleta" title="Oferta Completa">
        <FichaOfertaCompleta :infoOfertaCompleta="modal">
        </FichaOfertaCompleta>
      </b-modal>
    </div>
  </div>
</template>

<script>
import Header from './components/Header.vue'
import FichaOferta from './components/FichaOferta.vue'
import FichaOfertaCompleta from './components/FichaOfertaCompleta.vue'

export default {
  name: 'App',
  components: {
    Header, FichaOferta, FichaOfertaCompleta
  },
  data() {
    return {
      resultado: '',
      modal: ''
    }
  },
  methods : {
    todo: function(){
      this.axios.get('http://labs.iam.cat/~a18kevlarpal/transversal3/api.php/records/oferta').then((response) => {
        console.log(response.data.records);
        this.resultado=response.data.records;
      })
    },
    asix: function(){
      this.axios.get('http://labs.iam.cat/~a18kevlarpal/transversal3/api.php/records/oferta?filter=categoria_id,eq,2').then((response) => {
        console.log(response.data.records);
        this.resultado=response.data.records;
      })
    },
    daw: function(){
      this.axios.get('http://labs.iam.cat/~a18kevlarpal/transversal3/api.php/records/oferta?filter=categoria_id,eq,3').then((response) => {
        console.log(response.data.records);
        this.resultado=response.data.records;
      })
    },
    dam: function(){
      this.axios.get('http://labs.iam.cat/~a18kevlarpal/transversal3/api.php/records/oferta?filter=categoria_id,eq,4').then((response) => {
        console.log(response.data.records);
        this.resultado=response.data.records;
      })
    },
    smx: function(){
      this.axios.get('http://labs.iam.cat/~a18kevlarpal/transversal3/api.php/records/oferta?filter=categoria_id,eq,5').then((response) => {
        console.log(response.data.records);
        this.resultado=response.data.records;
      })
    },
  },
  mounted() {
    this.axios.get('http://labs.iam.cat/~a18kevlarpal/transversal3/api.php/records/oferta').then((response) => {
      console.log(response.data.records);
      this.resultado=response.data.records;
    })
  }
}
</script>

<style>
#principal {
  text-align: center;
}
</style>
