<template>
    <div class="fixed top-0 left-0 right-0">
        <div class="block h-14 w-full items-end px-4 py-2 bg-white shadow-md">
            <div class="flex items-end justify-between h-full">
                <div :class="{ 'ml-64': isExpanded, 'ml-16': !isExpanded }" class="flex items-center h-full overflow-hidden">
                    <div class="h-full flex items-center">
                        LOGO
                    </div>
                </div>
                <div class="relative" v-if="auth?.user">
                    <button @click="toggleDropdown" class="flex items-center space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10 text-primary">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="text-gray-800 text-xl">{{ auth.user.name }}</span>
                    </button>

                    <div v-if="isOpen" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1">
                        <Link href="/logout" method="DELETE" as="button"
                            class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                            </svg>
                            <span>Logout</span>
                        </div>
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </div>
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