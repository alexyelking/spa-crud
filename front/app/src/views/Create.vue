<template>
  <div class="row">
    <div class="col s6 offset-s3">
      <h1>Create entry</h1>

      <form @submit.prevent="submitHandler">

        <div class="input-field">
          <input v-model="first_name" id="first_name" type="text" class="validate" required minlength="2" maxlength="15">
          <label for="first_name">First Name</label>
          <span class="character-counter" style="float: right; font-size: 12px;">{{ first_name.length }}/15</span>
        </div>

        <div class="input-field">
          <input v-model="last_name" id="last_name" type="text" class="validate" required minlength="2" maxlength="15">
          <label for="last_name">Last Name</label>
          <span class="character-counter" style="float: right; font-size: 12px;">{{ last_name.length }}/15</span>
        </div>

        <div class="input-field">
          <p>
          <label>
            <input v-model="category" value="Ordinary" name="group1" type="radio" checked/>
            <span>Ordinary</span>
          </label>
            <br>
          <label>
            <input v-model="category" value="Student" name="group1" type="radio" />
            <span>Student</span>
          </label>
            <br>
          <label>
            <input v-model="category" value="Pensioner" name="group1" type="radio" />
            <span>Pensioner</span>
          </label>
          </p>
        </div>

        <div class="input-field">
          <input v-model="number_of_tickets" id="number_of_tickets" type="number" class="validate" required min="1" max="15">
          <label for="number_of_tickets">Number of tickets</label>
          <span class="helper-text" data-success="right">min:1 max:15</span>
        </div>

        <button class="btn green" type="submit" style="margin-right: 1rem;">Create</button>
        <button class="btn" @click="toList">To List</button>
      </form>

    </div>
  </div>
</template>

<script>
export default {
  name: 'create',
  data: () => ({
    first_name: '',
    last_name: '',
    category: 'Ordinary',
    number_of_tickets: '',
  }),
  methods: {
    submitHandler() {
      const entry = {
        id: Date.now(),
        first_name: this.first_name,
        last_name: this.last_name,
        category: this.category,
        number_of_tickets: this.number_of_tickets
      }
      this.$store.dispatch('createEntry', entry)
      this.$router.push('/list')
    },
    toList() {
      this.$router.push('/list')
    }
  }
}

</script>

<style lang="scss" scoped>
</style>