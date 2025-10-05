<template>
    <div class="component event-handling">
        <div class="preview-box">
            {{ message }}
        </div>
        <div class="inline-actions">
            <button type="button" @click="updateMessage" :disabled="!canUpdate">
                Change Message
            </button>
            <button type="button" @click="resetMessage" :disabled="canUpdate">
                Reset
            </button>
        </div>
    </div>
</template>

<script setup>
import { computed, ref } from 'vue'

const defaultMessage = 'Click the button to update this message.'
const message = ref(defaultMessage)

const updateMessage = () => {
    message.value = 'Message changed! Keep exploring the events API.'
}

const resetMessage = () => {
    message.value = defaultMessage
}

const canUpdate = computed(() => message.value === defaultMessage)
</script>

<style scoped>
.component {
    margin-bottom: 1.5rem;
}
</style>
