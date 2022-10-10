<template>
  <div class="row">
    <div class="coll s6 offset-3">
      <h1 >There's definitely nothing here.</h1>
      <button class="btn" @click="toList">To List</button>
    </div>
  </div>
</template>

<script>
export default {
  name: '404',
  methods: {
    toList() {
      this.$router.push('/list')
    }
  }
}

</script>

<style lang="scss" scoped>
</style>
