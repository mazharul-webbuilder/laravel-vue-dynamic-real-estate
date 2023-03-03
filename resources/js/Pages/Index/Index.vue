<template>
    <MainLayout>

    </MainLayout>
</template>

<script setup>
    import {Link} from '@inertiajs/vue3'
    import MainLayout from '../../Layouts/MainLayout.vue'
    // defineProps(['message'])
    defineProps({
        message: String
    })
</script>
