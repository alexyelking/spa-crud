<template>
  <div class="row">
    <div class="app-loader col s6 offset-s5" style="margin-top: 10em;">
      <div class="preloader-wrapper active">
        <div class="spinner-layer" v-bind:class="color">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div>
          <div class="gap-patch">
            <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  computed: {
    color() {
      const colors = ['spinner-red-only', 'spinner-blue-only', 'spinner-green-only',]
      return colors[Math.floor(Math.random() * 3)]
    }
  }
}
</script>