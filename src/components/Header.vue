<template>
  <div>
      <header class="header"><LogoutBtn/></header>
  </div>
</template>

<script>
import LogoutBtn from './LogoutBtn.vue'
export default {
  name: 'Footer',
  components: {
    LogoutBtn
  }
}
</script>

<style>
.header{
    display: flex;
    align-items:center;
    justify-content: flex-end;
    color: var(--white-color);
    padding-right: 1rem;
    height:4.2rem;
    width: 100%;
    font-size: 2rem;
    background-color: var(--dark-color);

}
.header p{
   transition: all .3s ease-in-out;
}
.header p:hover {
  color: var(--primary-color);
}
</style>
