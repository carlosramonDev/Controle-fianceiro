<template>
  <div>
    <aside>

      <nav class="navbar">
        <ul>
          <li>
            <router-link to="/"><UilHome/>Início</router-link>
          </li>
          <li>
             <router-link to="/Users"><UilUsersAlt/>Usuários</router-link>
          </li>
           <li>
             <router-link to="/Finance"><UilDollarAlt/>Finaceiro</router-link>
          </li>
           <li>
             <router-link to="/Relatorio"><UilReceiptAlt/>Relatório</router-link>
          </li>
        </ul>
      </nav>

    </aside>
  </div>
</template>

<script>
import { UilHome, UilUsersAlt, UilDollarAlt, UilReceiptAlt } from '@iconscout/vue-unicons'
export default {
  components: {
    UilHome,
    UilUsersAlt,
    UilDollarAlt,
    UilReceiptAlt
  }
}
</script>

<style >

.navbar ul {
  color:var(--white-color);
  background-color:var(--secondary-color);
  height:calc(100vh - 8.4rem);
  width: 14.3rem;
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
  left: 0;
  flex-direction: column;
}
.navbar{
  font-size:2rem;
  font-weight:bold;
}
.navbar li{
  padding: .5rem;
}
.navbar  a{
  color:var(--white-color);
  cursor: pointer;
  transition:all 0.5s ease-in-out;
}
.navbar a:hover{
  color:var(--primary-color);
}
</style>
