<template>
  <div class="row">
    <div class="col s6 offset-s3">
      <h1>Create task</h1>
      <form>
        <div class="input-field">
          <input id="first_name" type="text" class="validate" required minlength="2" maxlength="45">
          <label for="first_name">First Name</label>
          <span class="helper-text" data-success="right">min:2 max:45</span>
        </div>
        <div class="input-field">
          <input id="last_name" type="text" class="validate" required minlength="2" maxlength="45">
          <label for="last_name">Last Name</label>
          <span class="helper-text" data-success="right">min:2 max:45</span>
        </div>
        <div class="input-field">
          <select ref="select">
            <option value="" disabled selected>Select a category</option>
            <option value="1">Pensioner</option>
            <option value="2">Student</option>
            <option value="3">Ordinary</option>
          </select>
        </div>
        <div class="input-field">
          <input id="number_of_tickets" type="number" class="validate" required min="1" max="10">
          <label for="number_of_tickets">Number of tickets</label>
          <span class="helper-text" data-success="right">min:1 max:10</span>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  name: 'create',
  mounted() {
    M.FormSelect.init(this.$refs.select, {
    })
  }
}
</script>

<style lang="scss" scoped>
</style>