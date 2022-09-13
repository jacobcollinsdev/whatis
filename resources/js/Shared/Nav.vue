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
            <form @submit.prevent="submit" class="mb-4">
                <div class="mb-4">
                    <label for="name">Name</label> <br />
                    <input type="text" name="name" id="name" class="border-2 border-gray-200 p-2 w-full rounded" v-model="form.name">
                    <p v-if="errors.name" class="text-red-500">{{ errors.name }}</p>
                </div>

                <div>
                    <label for="description">Description</label> <br />
                    <editor
                        api-key='1647or253qni05v3vteb6f5g0wpd74mva482bk6vdpwpoqzh'
                        name="description"
                        id="description"
                        v-model="form.description"
                        rows="15"
                        :init="{
                            plugins: 'lists link code help wordcount'
                        }"
                    />
                    <p v-if="errors.description" class="text-red-500">{{ errors.description }}</p>
                </div>

                <div class="flex justify-between mt-4 gap-8">
                    <button type="button" @click="closeModal"
                        class="py-2 w-full bg-gray-100 hover:bg-gray-200">Cancel</button>
                    <button type="submit" :disabled="form.processing" class="py-2 w-full bg-emerald-700 hover:bg-emerald-800 text-white">Add</button>
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
    import { useForm } from "@inertiajs/inertia-vue3";
    import Editor from '@tinymce/tinymce-vue'

    export default {
        components: { NavLink, Modal, List, Favourite, Add, Editor },
        data() {
            return {
                isModalVisible: false,
            };
        },
        props: {
            errors: Object
        },
        methods: {
            showModal() {
                this.isModalVisible = true;
            },
            closeModal() {
                this.isModalVisible = false;
                this.clearForm();
            },
            clearForm() {
                this.form.name = null,
                this.form.description = ''
            },
        },
        setup() {
            const form = useForm({
                name: null,
                description: null,
                favourite: false,
            })

            function submit() {
                Inertia.post('/keywords', form);
            }

            return { form, submit }
        },
    }
</script>