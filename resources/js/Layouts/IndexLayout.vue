<template>
    <Header></Header>
    <main>
        <slot></slot>
    </main>
</template>

<script setup>
import Header from '@/Layouts/IndexHeader.vue'
</script>