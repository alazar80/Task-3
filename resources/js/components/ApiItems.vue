<template>
    <div class="component api-items">
        <div class="inline-actions">
            <button type="button" @click="fetchItems" :disabled="loading">
                {{ loading ? 'Loading...' : 'Refresh Items' }}
            </button>
        </div>

        <p v-if="loading" class="loading-indicator">Asking the Laravel API for fresh items...</p>
        <p v-if="error" class="error-message">{{ error }}</p>

        <ul v-if="items.length" class="list-card">
            <li v-for="item in items" :key="item.id">{{ item.name }}</li>
        </ul>
        <p v-else-if="!loading && !error" class="status-note">No items found yet. Try refreshing.</p>
    </div>
</template>

<script setup>
import { onMounted, ref } from 'vue'
import axios from 'axios'

const items = ref([])
const loading = ref(false)
const error = ref('')

const fetchItems = async () => {
    loading.value = true
    error.value = ''

    try {
        const { data } = await axios.get('/api/items')
        items.value = data
    } catch (err) {
        error.value = 'Unable to load items. Please try again.'
        console.error(err)
    } finally {
        loading.value = false
    }
}

onMounted(fetchItems)
</script>

<style scoped>
.component {
    margin-bottom: 1.5rem;
}
</style>
