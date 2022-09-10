<template>
    <nav class="fixed left-0 bg-blue-500 text-white w-[150px] min-h-full">
        <ul>
            <NavLink class="mb-16">WhatIs?</NavLink>
            <NavLink>All</NavLink>
            <NavLink>Keyword</NavLink>
            <NavLink>Bookmarked</NavLink>
            <NavLink>Add</NavLink>
        </ul>
    </nav>
</template>

<script>
    import NavLink from "./NavLink.vue";

    export default {
        components: { NavLink }
    }
</script>