<template>
    <nav class="fixed left-0 bg-blue-500 text-white min-h-full z-50">
        <ul>
            <NavLink class="mb-16 font-bold text-2xl">?</NavLink>
            <NavLink>
                <List />
            </NavLink>
            <NavLink>
                <Favourite />
            </NavLink>
            <NavLink @click="showModal">
                <Add />
            </NavLink>
        </ul>
    </nav>
    <Modal v-show="isModalVisible" @close="closeModal">
        <template v-slot:header>
            Add Keyword
        </template>

        <template v-slot:body>
            <form @submit.prevent="submit" class="mb-4" ref="form">
                <div class="mb-4">
                    <label for="name">Name</label> <br />
                    <input type="text" name="name" id="name" class="border-2 border-gray-200 p-2 w-full rounded" v-model="form.name">
                    <!-- <p v-if="form.errors.name" class="text-red-500">{{ form.errors.name }}</p> -->
                </div>

                <div>
                    <label for="description">Description</label> <br />
                    <textarea name="description" id="description" cols="30" rows="10"
                        class="border border-gray-200 w-full" v-model="form.description"></textarea>
                    <!-- <p v-if="form.errors.description" class="text-red-500">{{ form.errors.description }}</p> -->

                </div>

                <div class="flex justify-between mt-4 gap-8">
                    <button type="button" @click="closeModal"
                        class="py-2 w-full bg-gray-100 hover:bg-gray-200">Cancel</button>
                    <button type="submit"
                        class="py-2 w-full bg-emerald-700 hover:bg-emerald-800 text-white">Add</button>
                </div>

            </form>
        </template>

    </Modal>
</template>

<script>
    import NavLink from "./NavLink.vue";
    import Modal from "../Components/Modal.vue";
    import List from "../Icons/List.vue";
    import Favourite from "../Icons/Favourite.vue";
    import Add from "../Icons/Add.vue";
    import { Inertia } from "@inertiajs/inertia";
    import { reactive } from 'vue';

    export default {
        components: { NavLink, Modal, List, Favourite, Add },
        data() {
            return {
                isModalVisible: true,
            };
        },
        methods: {
            showModal() {
                this.isModalVisible = true;
            },
            closeModal() {
                this.isModalVisible = false;
            },
        },
        setup() {
            const form = reactive({
                name: null,
                description: null,
            })

            function submit() {
                Inertia.post('/keywords', form)
            }

            return { form, submit }
        },
    }
</script>