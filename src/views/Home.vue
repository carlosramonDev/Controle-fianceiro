<template>
  <div class="home">
    <div class="today">
     <Widget title="Total a receber" :number="setLocaleCoin(toReceive)"/>
     <Widget title="Total a pagar" :number="setLocaleCoin(toPay)"/>
     <Widget title="Nº serviços"  :number="services"/>

    </div>
    <div class="graphArea">
      <h3>Resumo financeiro</h3>
      <div class="graph">
        gráfico lindão
        <button v-on:click="toReceive = toReceive + 100">Increment</button>
      </div>
    </div>
  </div>
</template>

<script>
import api from '../services/api'
import Widget from '@/components/Widget.vue'
export default {
  name: 'Home',
  components: {
    Widget

  },
  methods: {
    createGraphic () {
      api.get('api/foods').then((response) => {
        console.log(response.data)
      })
    },
    setLocaleCoin (coin) {
      coin = parseFloat(coin)
      return coin.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' })
    }
  },
  data () {
    return {
      toPay: 1000,
      toReceive: 2000,
      services: 5

    }
  }
}

</script>
<style>
.home {
  padding:1rem;
  width: 100%;

}
.today {

  display: flex;
  width: 100%;
  align-items: center;
  justify-content: space-between;
}
.graphArea {
  text-align: center;
  width: 100%;
  background-color: var(--dark-color);
  margin-top: 1rem;
  height: 62vh;
  border-radius: 1rem;
  padding: 1rem;
  color: #f8f8f8;

}
.graphArea h3{
  margin-bottom:0.5rem;
}
</style>
