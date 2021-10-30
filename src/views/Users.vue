<template>
  <div class="about">
    <div class="crud-section" >
      <form action="">
        <div class="inputs">
          <label for="name">Nome:</label>
        <input type="text" name="name" id="name"
         placeholder="Digite o nome do usuário">
         <label for="Email">Email:</label>
        <input type="text" name="email" id="email"
         placeholder="Digite o email do usuário">
         <label for="CPF">CPF:</label>
         <input type="text" name="CPF" id="CPF" placeholder="Digite o CPF do usuário">
        </div>

         <div class="actions">

         <button class="btn-dark" type="submit">Salvar</button>
         <button class="btn-dark" type="submit">Cancelar</button>
         </div>
      </form>
    </div>
  </div>
</template>
<style scoped>
.about {
  width: 100%;
  height: 100%;
  display: flex;
  padding: 1rem;
  align-items: center;
  justify-content:center;
}
.inputs {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
.crud-section label{
  font-weight: 500;
  font-size: 1.8rem;
}
.crud-section form{
  box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
  border: 1px solid #ccc;
  padding:2rem;
  width: 72rem;
  font-size:1.5rem;
  font-family:'Oswald', 'Helvetica', sans-serif;

}
.crud-section input{
  margin:1rem;
  width: 20rem;
  padding:1rem;
  outline: none;
  border-radius: .5rem;
  border: 1px solid var(--primary-color);
}
.actions{
  display: flex;
  align-items: center;
  justify-content:center;
}
.actions button{
  height:4rem;
  padding:1rem;
  margin:1rem;
  border: none;
  border-radius: .5rem;
  font-size:1.4rem;
  font-weight: 600;
  color: #f8f8f8;
}
.btn-dark {
background-color: var(--dark-color);
transition: all .3s ease-in-out;
color: #f8f8f8;
}
.btn-dark:hover {
background-color: var(--secondary-color);
transition: all .3s ease-in-out;}
</style>
