<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    serverTime: {
        type: String,
        required: true,
    },
});

</script>

<template>

    <h3>
        This is page 2
    </h3>

    <p>
        Server time: {{ serverTime }}
    </p>

    <Link href="/">
        back
    </Link>
</template>