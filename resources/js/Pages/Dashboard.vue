<template>
    <Nav :errors="errors"/>
    <main class="flex relative items-center justify-center min-h-screen pl-16">

        <aside class="text-white min-h-screen bg-slate-400 min-w-[200px] z-0">
            <ul>
                <li class="py-2 px-4 mb-16">
                    <input class="w-full py-1 px-2 rounded" placeholder="Search..." type="text">
                </li>
                <li v-for="keyword in keywords" key="keyword">
                    <a href="#" class="block py-2 px-4 hover:bg-slate-500">
                        <h3 class="font-serif font-bold">{{ keyword.name }}</h3>
                        <p class="text-sm" v-html="keyword.description"></p>
                    </a>
                </li>
            </ul>
        </aside> 

        <div class="grid items-center justify-center w-full">
            <Keyword :keyword="keyword"/>
        </div>

        
    </main>
</template>

<script>
    import Nav from '../Shared/Nav.vue';
    import Keyword from './Keyword.vue';

    export default {
        components: { Nav, Keyword },
        props: {
            errors: Object,
            keywords: Array,
            keyword: Object,
        },
        methods: {
            selectKeyword() {
                var chosenNumber = Math.floor(Math.random() * this.keywords.length);
                this.keyword = this.keywords[chosenNumber];
            }
        }
    }
</script>