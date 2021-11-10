<template>
  <div>
      <button class="btn" type="submit" @click="logout">Logout <UilSignout/></button>
  </div>
</template>

<script>
import { UilSignout } from '@iconscout/vue-unicons'
export default {
  name: 'Logout',
  components: {
    UilSignout
  },
  methods: {
    logout: function (e) {
      e.preventDefault()
    }
  }

}
</script>

<style>
.btn {
  padding:.8rem;
  font-family: 'Oswald', sans-serif;
  font-weight: 700;
  background-color:var(--primary-color);
  color: #f8f8f8;
  border:none;
  border-radius: .5rem;
  cursor: pointer;
}
.btn:hover{
   --primary-color:#ff79c5b2;
}
</style>
