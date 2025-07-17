<template>
  <aside :class="[
    'fixed left-0 top-0 z-40 h-screen transition-width duration-300',
    isExpanded ? 'w-64' : 'w-16'
  ]" class="bg-white text-gray-600">
  </aside>
</template>

<script setup>
import { inject } from 'vue'
import { Link } from '@inertiajs/vue3'
import { HomeIcon, UsersIcon, FolderIcon, CalendarIcon } from '@heroicons/vue/24/outline'

const isExpanded = inject('isExpanded')

const menuItems = [
  { name: 'Dashboard', href: '/dashboard', icon: HomeIcon },
  { name: 'Users', href: '/users', icon: UsersIcon },
  { name: 'Projects', href: '/projects', icon: FolderIcon },
  { name: 'Calendar', href: '/calendar', icon: CalendarIcon }
]

const toggleSidebar = () => {
  isExpanded.value = !isExpanded.value
}
</script>

<style scoped>
.transition-width {
  transition-property: width;
}
</style>