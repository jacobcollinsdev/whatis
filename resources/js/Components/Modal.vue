<template>
    <div class="fixed top-0 left-0 bottom-0 right-0 bg-black/25 flex items-center justify-center z-50">
        <div class="bg-white overflow-x-auto flex flex-col shadow-lg">
            <header class="flex justify-between p-8 relative text-green-500">
                <slot name="header">
                    This is the default title!
                </slot>
                <button type="button" class="absolute top-0 right-0 text-lg p-5" @click="close">
                    x
                </button>
            </header>

            <section class="relative py-5 px-3">
                <slot name="body">
                    This is the default body!
                </slot>
            </section>

            <footer class="flex p-8 flex-col justify-end">
                <slot name="footer">
                    This is the default footer!
                </slot>
            </footer>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Modal',
    methods: {
        close() {
            this.$emit('close');
        },
    },
};
</script>