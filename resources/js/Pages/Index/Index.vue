<template>
    <h1 class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, ipsa?</h1>
    <Link href="/hello">Show Page</Link>
    <div>
        The message is {{ message }}
    </div>
</template>

<script setup>
    import {Link} from '@inertiajs/vue3'
    // defineProps(['message'])
    defineProps({
        message: String
    })
</script>
