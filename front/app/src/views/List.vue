<template>
  <h1>List</h1>
<!--  <h6>Standard ticket price: 500</h6>-->
  <button class="btn orange" @click="notification()">
    Task text...
  </button>
  <hr>
  <br>

  <div v-if="loading" class="container">
    <Loader/>
  </div>

  <div v-else>
    <table class="striped" v-if="allEntries.length">
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
          v-for="(entry, idx) of allEntries"
          :key="entry.id"
      >
        <td>{{ idx + 1 }}</td>
        <td>{{ entry.first_name }}</td>
        <td>{{ entry.last_name }}</td>
        <td>{{ entry.category }}</td>
        <td>{{ entry.number_of_tickets }}</td>
        <td>{{ entry.total_price }}</td>
        <td>
          <router-link tag="button" class="btn yellow" :to="'/entry/edit/' + entry.id">
            <i class="material-icons">edit</i>
          </router-link>
        </td>
        <td>
          <button class="btn red" @click="deleteEntry(entry.id)"><i class="material-icons">delete</i></button>
        </td>
      </tr>
      </tbody>
    </table>
    <p v-else>No entries here. Create one</p>
    <br>
    <router-link
        class="btn green"
        to="/"
    >
      <i class="material-icons">plus_one</i>
    </router-link>
    <!--    <button class="btn btn-blue" :to="'/'"></button>-->
  </div>
</template>

<script>
import Loader from '@/components/Loader'

export default {
  data: () => ({
    loading: true,
  }),
  components: {
    Loader
  },
  async mounted() {
    await this.$store.dispatch('fetchEntries')
    this.loading = false
  },
  computed: {
    allEntries() {
      return this.$store.getters.entries
    }
  },
  methods: {
    async deleteEntry(id) {
      if (confirm("Delete?")) {
        this.loading = true
        await this.$store.dispatch('deleteEntry', id)
        this.loading = false
      }
    },
    notification() {
      window.alert("Стоимость билетов учреждения досуга. Есть несколько категорий клиентов, обычные клиенты (100%), пенсионеры (80%), студенты (90%), разработать для каждой из этих категорий различные алгоритмы расчёта стоимости билетов для них. Программа должна позволять вычислять стоимость билетов для различных категорий клиентов, иметь возможность вводить клиентов, вносить изменения.");
    }
  },
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
