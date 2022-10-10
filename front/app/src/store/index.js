import {createStore} from 'vuex'
import axios from 'axios'

export default createStore({
    state: {
        entries: JSON.parse(localStorage.getItem('entries') || '[]')
    },
    getters: {
        entries: s => s.entries,
        // entries: s => JSON.parse(localStorage.getItem('entries') || '[]'),
        entryById: s => id => s.entries.find(e => e.id === id)
    },
    mutations: {
        createEntry(state, entry) {
            state.entries.push(entry)

            localStorage.setItem('entries', JSON.stringify(state.entries))
        },
        updateEntry(state, {id, first_name, last_name, category, number_of_tickets}) {
            const entries = state.entries.concat()

            const idx = entries.findIndex(e => e.id === id)
            const entry = entries[idx]

            entries[idx] = {...entry, first_name, last_name, category, number_of_tickets}

            state.entries = entries

            localStorage.setItem('entries', JSON.stringify(state.entries))
        },
        deleteEntry(state, id) {
            const buff = localStorage.getItem('entries')
            const entries = JSON.parse(buff)
            const idx = entries.findIndex(e => e.id === id)

            entries.splice(idx, 1)

            state.entries = entries

            localStorage.setItem('entries', JSON.stringify(state.entries))
        }
    },
    actions: {
        createEntry({commit}, entry) {
            commit('createEntry', entry)
        },
        updateEntry({commit}, entry) {
            commit('updateEntry', entry)
        },
        deleteEntry({commit}, id) {
            commit('deleteEntry', id)
        },
        async fetchEntries() {
            axios.get('http://127.0.0.1:8085/api/records').then((response) => {
                console.log(response.data)
                console.log(response.data.status)
                console.log(response)
            })

        }
    },
    modules: {}
})
