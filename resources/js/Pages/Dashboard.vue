<template>
    <Nav :errors="errors"/>
    <main class="flex relative items-center justify-center min-h-screen pl-16">

        <!-- <aside class="text-white min-h-screen bg-slate-400 min-w-[200px] z-0">
            <ul>
                <li class="py-2 px-4 mb-16">
                    <input class="w-full py-1 px-2 rounded" placeholder="Search..." type="text">
                </li>
                <li v-for="n in 8" key="n">
                    <a href="#" class="block py-2 px-4 hover:bg-slate-500">
                        <h3 class="font-serif font-bold">Interface</h3>
                        <p class="text-sm">Lorem ipsum dolor, sit amet...</p>
                    </a>
                </li>
            </ul>
        </aside>  -->

        <div class="grid items-center justify-center w-full">
            <Keyword />
        </div>

        
    </main>
</template>

<script>
    import Nav from '../Shared/Nav.vue';
    import Keyword from './Keyword.vue';

    export default {
        components: { Nav, Keyword },
        props: {
            errors: Object
        }
    }
</script>