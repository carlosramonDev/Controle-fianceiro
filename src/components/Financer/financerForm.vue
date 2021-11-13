<template>
  <div class="userForm">
      <h3>Cadastrar despesa</h3>
      <form action="">
          <div class="formSide">

          <input type="text" name="Name" placeholder="Nome da despesa">
          <input type="number" name="value" placeholder="Valor da despesa">
          <label for="payDay">Data de vencimento:</label>
          <input type="date" name="payDay" placeholder="Data de vencimento">
          </div>
          <div class="formSide">

          <input type="radio" name="" id="">
          </div>
      </form>
  </div>
</template>

<script>
export default {
  name: 'financerForm'
}
</script>

<style>

</style>
