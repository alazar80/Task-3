<template>
    <div class="component data-binding">
        <div class="form-stack">
            <label for="binding-name">Your name</label>
            <div class="inline-actions">
                <input
                    id="binding-name"
                    v-model="name"
                    type="text"
                    placeholder="Type your name"
                />
                <button type="button" @click="resetName">Reset</button>
            </div>
            <div class="preview-box">
                <strong>{{ previewText }}</strong>
            </div>
        </div>
    </div>
</template>

<script setup>
import { computed, ref } from 'vue'

const name = ref('')

const resetName = () => {
    name.value = ''
}

const previewText = computed(() => {
    if (!name.value.trim()) {
        return 'Start typing to see real-time updates.'
    }

    return `Current value: ${name.value}`
})
</script>

<style scoped>
.component {
    margin-bottom: 1.5rem;
}
</style>
