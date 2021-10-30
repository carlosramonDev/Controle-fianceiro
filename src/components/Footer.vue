<template>
  <div>
    <footer class="footer">
      <p>Feito com <UilHeart/> pela Tecnosystem</p>
    </footer>
  </div>
</template>

<script>
import { UilHeart } from '@iconscout/vue-unicons'
export default {
  name: 'Footer',
  components: {
    UilHeart
  }
}
</script>

<style >
.footer {
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--white-color);
  height: 4.2rem;
  width: 100%;
  background-color: var(--dark-color);
}

</style>
