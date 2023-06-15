import axios from "axios";

export default {
    actions: {
        async fetchEntries(ctx) {
            await axios
                .get('http://127.0.0.1:8085/api/records')
                .then(response => this.entries = response.data.data.data)
            ctx.commit('updateEntries', this.entries)
        },
        async createEntry(ctx, entry) {
            await axios
                .post('http://127.0.0.1:8085/api/records', {
                    first_name: entry.first_name,
                    last_name: entry.last_name,
                    category_id: entry.category_id,
                    number_of_tickets: entry.number_of_tickets,
                })
                .catch(error => console.log(error))
        },
        async updateEntry(ctx, entry) {
            await axios
                .put('http://127.0.0.1:8085/api/records/' + entry.id, {
                    first_name: entry.first_name,
                    last_name: entry.last_name,
                    category_id: entry.category_id,
                    number_of_tickets: entry.number_of_tickets,
                })
                .catch(error => console.log(error))
        },

        async deleteEntry(ctx, id) {
            await axios
                .delete('http://127.0.0.1:8085/api/records/' + id)
                .catch(error => console.log(error))
            await axios
                .get('http://127.0.0.1:8085/api/records')
                .then(response => this.entries = response.data.data.data)
            ctx.commit('updateEntries', this.entries)
        },
    },
    mutations: {
        updateEntries(state, entries) {
            state.entries = entries
        },
    },
    state: {
        entries: []
    },
    getters: {
        entries: s => s.entries,
        entryById: s => id => s.entries.find(e => e.id === id)
    },
}
