import './bootstrap'
import { createApp } from 'vue'
import ApiItems from './components/ApiItems.vue'
import ConditionalRender from './components/ConditionalRender.vue'
import DataBinding from './components/DataBinding.vue'
import EventHandling from './components/EventHandling.vue'
import ProductsList from './components/ProductsList.vue'

const app = createApp({})

app.component('data-binding', DataBinding)
app.component('conditional-render', ConditionalRender)
app.component('api-items', ApiItems)
app.component('event-handling', EventHandling)
app.component('products-list', ProductsList)

app.mount('#app')
