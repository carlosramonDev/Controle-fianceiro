<template>
  <div class="userForm">
    <h3>Cadastrar usuários</h3>
    <form action="" method="post" class="form">
      <input type="text" placeholder="Digite o nome do usuário" />
      <input
        type="number"
        name="userNumber"
        placeholder="Digite o telefone do usuário"
      />
      <input type="number" name="userCPF" placeholder="Digite o CPF" />
      <button class="btn" type="submit" v-on:click="createUser">Cadastrar</button>
    </form>
  </div>
</template>

<script>
export default {
  name: 'userForm',
  methods: {
    createUser (e) {
      e.preventDefault()
      console.log('Cadastrando')
    }
  }
}
</script>

<style>
.userForm {
  display: flex;
  align-items: center;
  color: #f8f8f8;
  padding: 2rem;
  flex-direction: column;
}
.userForm h3 {
  margin-bottom: 1rem;
}
.form {
  display: flex;
  flex-direction: column;
  align-items: center;
  border-radius: 2rem;
  background-color: var(--dark-color);
}
.form input{
  margin: 1rem;
  width: 30rem;
  outline: none;
  border: none;
  padding: .2rem;
  border-radius: .2rem;
}

</style>
