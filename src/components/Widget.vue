<template>
  <div class="widget" >
      <h3>{{title}}</h3>
      <span>{{number}}</span>
  </div>
</template>

<script>
export default {
  name: 'Widget',
  props: {
    title: String,
    number: [Number, String]
  }
}
</script>

<style>
.widget{
    text-align: center;
    width: 27.9rem;
    height:12.2rem;
    background-color:#282A36;
    border-radius:1rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: #fff;
    overflow: hidden;
}
.widget h3{
    border-bottom: 1px solid var(--primary-color);
    width:100%;
    margin-bottom: 1rem;
}
.widget p{
    font-weight: bold;
}
</style>
