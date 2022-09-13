<template>
    <div class="max-w-[800px]">
        <span>Today's Keyword is:</span>
        <h1 class="font-serif font-bold text-8xl text-blue-500 mb-4">{{ keyword.name }}</h1>
        <span class="block w-1/2 bg-blue-500 h-0.5 mb-8"></span>
        <p class="text-lg" v-html="keyword.description"></p>
    </div>
</template>

<script>
    export default {
        props: {
            keyword: Object
        }
    }
</script>