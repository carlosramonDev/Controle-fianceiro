<template>
  <div class="about">
   <div class="buttons">
     <button v-on:click="showTable">{{tableStateText}}</button>
     <button v-on:click="formVisibility">{{btnForm}}</button>
   </div>
   <div class="form" v-if="formState">
     <userForm/>
   </div>
    <div class="table" v-if="tableState">
    <Table/>
    </div>
  </div>
</template>
<script>
import userForm from '@/components/users/userForm.vue'
import Table from '@/components/Table.vue'
export default {
  name: 'Users',
  components: {
    Table,
    userForm
  },
  data () {
    return {
      btnForm: 'Cadastrar um novo usuário',
      formState: false,
      tableState: false,
      tableStateText: 'Mostrar Cadastros'
    }
  },
  methods: {
    showTable () {
      this.formState = false
      this.tableState = !this.tableState
      this.tableStateText = this.tableState ? 'Ocultar cadastros' : 'Mostrar cadastros'
      this.btnForm = this.formState ? 'Ocultar formulário de cadastro' : 'Cadastrar um novo usuário'
    },
    formVisibility () {
      this.tableState = false
      this.formState = !this.formState
      this.tableStateText = this.tableState ? 'Ocultar cadastros' : 'Mostrar cadastros'

      this.btnForm = this.formState ? 'Ocultar formulário de cadastro' : 'Cadastrar um novo usuário'
    }
  }
}
</script>
<style scoped>
.about {
  width: 100%;
  max-height: 100%;
  display: flex;
  padding: 1rem;
  flex-direction: column;
  align-items: center;
  justify-content:flex-start;
}
.buttons{
  margin-bottom: 2rem;
  display: flex;
}
.buttons button{
  margin:.5rem;
  padding: .5rem;
  border: none;
  background-color: var(--dark-color);
  color:var(--primary-color);
  border-radius: .5rem;
  font-weight: 700;
}
</style>
