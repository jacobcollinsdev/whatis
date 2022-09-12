<template>
    <div class="fixed top-0 left-0 bottom-0 right-0 bg-black/25 flex items-center justify-center z-50">
        <div class="bg-white overflow-x-auto p-8 flex flex-col shadow-lg">
            <header class="flex items-center justify-between mb-4 relative font-bold text-xl">
                <slot name="header" />
                <Close @click="close"/>
            </header>

            <section class="relative">
                <slot name="body" />
            </section>

            <footer>
                <slot name="footer"/>
            </footer>
        </div>
    </div>
</template>

<script>
import Close from '../Icons/Close.vue';

export default {
    name: 'Modal',
    components: { Close },
    methods: {
        close() {
            this.$emit('close');
        },
    },
};
</script>