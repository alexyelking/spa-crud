<template>
  <div class="navbar-fixed">
    <nav class="blue-grey darken-3">
      <div class="nav-wrapper">
        <router-link to="/" class="brand-logo">Tasks</router-link>
        <ul class="right hide-on-med-and-down">
          <li>
            <router-link
                to="/"
                exact
                active-class="active"
            >
              <a href="#">Create</a>
            </router-link>
          </li>
          <li>
            <router-link
                to="/list"
                active-class="active"
            >
              <a href="#">List</a>
            </router-link>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</template>

<script>
export default {}
</script>

<style lang="scss" scoped>
nav {
  padding-left: 15%;
  padding-right: 13%;
}
</style>
