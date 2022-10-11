import { createApp } from 'vue'
import App from './App.vue'
import store from './store'
import router from './router'
import './registerServiceWorker'
import 'materialize-css/dist/js/materialize.min'

createApp(App).use(store).use(router).mount('#app')
