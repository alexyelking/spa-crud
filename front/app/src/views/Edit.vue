<template>
  <div class="row">
    <div v-if="entry" class="col s6 offset-s3">
      <h1>Edit entry</h1>

      <form @submit.prevent="submitHandler">

        <div class="input-field">
          <input v-model="first_name" id="first_name" type="text" class="validate" required minlength="2"
                 maxlength="15">
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
              <input v-model="category_id" value="3" name="group1" type="radio" checked/>
              <span>Ordinary</span>
            </label>
            <br>
            <label>
              <input v-model="category_id" value="2" name="group1" type="radio"/>
              <span>Student</span>
            </label>
            <br>
            <label>
              <input v-model="category_id" value="1" name="group1" type="radio"/>
              <span>Pensioner</span>
            </label>
          </p>
        </div>

        <div class="input-field">
          <input v-model="number_of_tickets" id="number_of_tickets" type="number" class="validate" required min="1"
                 max="15">
          <label for="number_of_tickets">Number of tickets</label>
          <span class="helper-text" data-success="right">min:1 max:15</span>
        </div>

        <button class="btn green" type="submit" style="margin-right: 1rem;">Update</button>
        <button class="btn" :to="'/list'">To List</button>
      </form>


    </div>

    <div v-else>
      <h1>There are no entries here...</h1>
      <button class="btn" @click="toList">To List</button>
    </div>

  </div>
</template>

<script>
export default {
  name: 'edit',
  computed: {
    entry() {
      return this.$store.getters.entryById(+this.$route.params.id)
    }
  },
  data: () => ({
    first_name: '',
    last_name: '',
    category_id: '',
    number_of_tickets: '',
  }),
  mounted() {
    this.first_name = this.entry.first_name
    this.last_name = this.entry.last_name
    this.category_id = this.entry.category_id
    this.number_of_tickets = this.entry.number_of_tickets
    setTimeout(() => {
      M.updateTextFields()
    }, 0)
  },
  methods: {
    async submitHandler() {
      const entry = {
        id: this.entry.id,
        first_name: this.first_name,
        last_name: this.last_name,
        category_id: this.category_id,
        number_of_tickets: this.number_of_tickets,
      }

      await this.$store.dispatch('updateEntry', entry)
      this.$router.push('/list')
    },
    async toList() {
      await this.$router.push('/list')
      location.reload()
    }
  }
}
</script>

<style lang="scss" scoped>
</style>
