<template>
<div class="tbl">
<table class="table">
    <thead>
        <tr>
            <th>Nome:</th>
            <th>CPF:</th>
            <th>Telefone:</th>
            <th>Ações:</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                Jhonatan
            </td>
            <td>
                0000010
            </td>
            <td>
                757949494
            </td>
               <td class="actions">
                   <button class="btnEdit">
                   <UilEdit/>
                   </button>
                   <button class="btnDelete">
                   <UilTrash/>
                   </button>
            </td>
        </tr>
    </tbody>
</table>
</div>
</template>

<script>

import { UilEdit, UilTrash } from '@iconscout/vue-unicons'
export default {
  name: 'Table',
  components: {
    UilTrash,
    UilEdit

  }
}
</script >

<style scoped>
.tbl{
    margin: 0 auto;
    width: 60rem;
    text-align: center;
}
.table {
    width: 100%;
    color: #f8f8f8;
    border-radius: 1rem;
    background-color:var(--dark-color);
}
.table thead tr th {
    margin: 1rem;
    padding: 1rem;
    font-family: 'Oswald', sans-serif;
    font-weight:900;
}
.actions {
    display: flex;
    align-items: center;
    justify-content: center;
}
.actions button{
    border: none;
    margin: .5rem;
    width: 3rem;
    font-size: 1.5rem;
    color: #222;
    font-weight: 900;
    padding: .2rem;
    border-radius: .2rem;
}
.actions .btnEdit{
    background-color:yellow;
}
.actions .btnDelete{
    background-color:red;
}
</style>
