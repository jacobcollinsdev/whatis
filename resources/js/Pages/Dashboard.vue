<template>
    <Nav />
    <main class="grid items-center justify-center h-screen pl-[200px]">
        <div class="max-w-[800px]">
            <span>Today's Keyword is:</span>
            <h1 class="text-8xl text-blue-500 mb-4">Trait</h1>
            <span class="block w-1/2 bg-blue-500 h-0.5 mb-8"></span>
            <p class="text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit dolorem dicta laudantium ducimus omnis cum nesciunt ratione dolores recusandae? Iste.</p>
        </div>
    </main>
</template>

<script>
    import Nav from '../Shared/Nav.vue';

    export default {
        components: { Nav },
        props: {}
    }
</script>