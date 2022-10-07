<template>
  <div>
    <h1>List</h1>

    <div v-if="entries.length" class="row">
      <div class="input-field col s3" style="padding-left: 0">
        <select ref="selector" v-model="filter">
          <option value="" disabled selected>Choose your filter</option>
          <option value="Ordinary">Ordinary</option>
          <option value="Student">Students</option>
          <option value="Pensioner">Pensioners</option>
        </select>
        <label style="left: 0">Category filter</label>
      </div>
      <button v-if="filter" class="btn btn-small" @click="filter = null">Clear filter</button>
    </div>



    <hr>

    <table v-if="entries.length">
      <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Last name</th>
        <th>Category</th>
        <th>Number of tickets</th>
        <th>Total price</th>
        <th></th>
      </tr>
      </thead>
      <tbody>
      <tr
          v-for="(entry, idx) of displayEntries"
          :key="entry.id"

      >
        <td>{{ idx + 1 }}</td>
        <td>{{ entry.first_name }}</td>
        <td>{{ entry.last_name }}</td>
        <td>{{ entry.category }}</td>
        <td>{{ entry.number_of_tickets }}</td>
        <td>###</td>
        <td>
          <router-link tag="button" class="btn btn-yellow" :to="'/entry/edit/' + entry.id">
            Edit
          </router-link>
        </td>
        <td>
          <button class="btn btn-red"  @click="deleteEntry(entry.id)">Delete</button>
        </td>
      </tr>
      </tbody>
    </table>
    <p v-else>No entries here. Create one</p>
  </div>
</template>

<script>
export default {
  data: () => ({
    filter: null
  }),
  computed: {
    entries() {
      return this.$store.getters.entries
    },
    displayEntries() {
      return this.entries.filter(e => {
        if (!this.filter) {
          return true
        }
        return e.category === this.filter
      })
    },
  },
  methods: {
    deleteEntry(id) {
      this.$store.dispatch('deleteEntry', id)
    }
  },
  mounted() {
    M.FormSelect.init(this.$refs.selector);
  }
}
</script>

<style lang="scss" scoped>
.btn-red {
  background: rgba(241, 45, 45, 0.82)
}

.btn-yellow {
  background-color: #f0ad4e;
}
</style>
