<template>
    <div class="component products-list">
        <div class="inline-actions">
            <button type="button" @click="fetchProducts" :disabled="loading">
                {{ loading ? 'Syncing...' : 'Reload Products' }}
            </button>
        </div>

        <p v-if="loading" class="loading-indicator">Fetching products from the Laravel API...</p>
        <p v-if="error" class="error-message">{{ error }}</p>

        <ul v-if="products.length" class="list-card">
            <li v-for="product in products" :key="product.id">
                <strong>{{ product.name }}</strong>
                <span>· ${{ formatPrice(product.price) }}</span>
            </li>
        </ul>
        <p v-else-if="!loading && !error" class="status-note">No products yet. Add some with the API or database seeders.</p>
    </div>
</template>

<script setup>
import { onMounted, ref } from 'vue'
import axios from 'axios'

const products = ref([])
const loading = ref(false)
const error = ref('')

const fetchProducts = async () => {
    loading.value = true
    error.value = ''

    try {
        const { data } = await axios.get('/api/products')
        products.value = data
    } catch (err) {
        error.value = 'Unable to load products. Ensure the migration is run and the API is reachable.'
        console.error(err)
    } finally {
        loading.value = false
    }
}

onMounted(fetchProducts)

const formatPrice = (price) => {
    const value = Number(price)
    if (Number.isNaN(value)) {
        return '0.00'
    }

    return value.toFixed(2)
}
</script>

<style scoped>
.component {
    margin-bottom: 1.5rem;
}
</style>
