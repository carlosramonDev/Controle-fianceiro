<template>
  <div id="app">
    <Header/>
    <div class="container">
    <Navbar/>
    <router-view/>
    </div>
    <Footer/>
  </div>
</template>
<script>
import Header from '@/components/Header.vue'
import Navbar from '@/components/Navbar.vue'
import Footer from '@/components/Footer.vue'
export default {
  components: {
    Navbar,
    Header,
    Footer
  }
}
</script>
<style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
html{
  font-size: 62.5%;
}
a{
  text-decoration: none;
}
li{
  list-style: none;
}
:root{
 --dark-color:#282a36;
 --primary-color:#FF79C6;
 --secondary-color:#383A59;
 --white-color:#f8f8f8;
}
body{
  font-size: 1.6rem;
  font-family: 'Oswald', 'Helvetica';
   /* background-color: #f8f8f8; */
   background: linear-gradient(to right, rgb(142, 45, 226), rgb(74, 0, 224));

}
.container{
  display:flex;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
input[type=number] {
  -moz-appearance: textfield;
}
</style>
