<template>
    <Nav />
    <main class="grid reltaive items-center justify-center min-h-screen pl-[150px]">

        <aside class="absolute text-white top-0 left-[150px] min-h-full bg-slate-400 w-[200px]">
            <ul>
                <li class="py-2 px-4 mb-16">
                    <input class="w-full" type="text">
                </li>
                <li v-for="n in 8" key="n">
                    <a href="#" class="block py-2 px-4">
                        <h3>Interface</h3>
                        <p class="text-sm">Lorem ipsum dolor, sit amet...</p>
                    </a>
                </li>
            </ul>
        </aside> 

        <div class="max-w-[800px]">
            <span>Today's Keyword is:</span>
            <h1 class="text-8xl text-blue-500 mb-4">Trait</h1>
            <span class="block w-1/2 bg-blue-500 h-0.5 mb-8"></span>
            <p class="text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit dolorem dicta laudantium ducimus omnis cum nesciunt ratione dolores recusandae? Iste. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque vel, rem accusantium culpa necessitatibus nemo beatae voluptatem eligendi quo iusto.</p>
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