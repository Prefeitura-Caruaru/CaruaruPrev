<template>
    
</template>


<script setup>
import { ref, provide } from 'vue'
import { Link } from '@inertiajs/vue3'

defineProps({
    auth: Object,
    isExpanded: Boolean
})

const isOpen = ref(false)

const toggleDropdown = () => {
    isOpen.value = !isOpen.value
}
</script>