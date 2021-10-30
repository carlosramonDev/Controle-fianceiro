<template>
  <div class="home">
    <div class="today">
     <Widget title="Total a receber" :number="10000"/>
     <Widget title="Total a pagar" :number="1000"/>
     <Widget title="Nº serviços" :number="10"/>
    </div>
    <div class="graphArea">
      <h3>Resumo financeiro</h3>
      <div class="graph">

      </div>
    </div>
  </div>
</template>

<script>
import Widget from '@/components/Widget.vue'
export default {
  name: 'Home',
  components: {
    Widget
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
