<template>
    <div class="component conditional-render">
        <span class="state-pill" :class="{ 'is-off': !isLoggedIn }">
            {{ isLoggedIn ? 'Logged In' : 'Logged Out' }}
        </span>
        <p>{{ message }}</p>
        <div class="inline-actions">
            <button type="button" @click="toggle">
                {{ isLoggedIn ? 'Log out' : 'Log in' }}
            </button>
        </div>
    </div>
</template>

<script setup>
import { computed, ref } from 'vue'

const isLoggedIn = ref(true)

const toggle = () => {
    isLoggedIn.value = !isLoggedIn.value
}

const message = computed(() => (isLoggedIn.value ? 'Welcome back! You have access to the dashboard.' : 'Please log in to continue.'))
</script>

<style scoped>
.component {
    margin-bottom: 1.5rem;
}
</style>
