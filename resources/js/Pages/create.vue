<script setup>
import { useForm } from "@inertiajs/vue3";
import { router } from "@inertiajs/vue3";
import Navbar from "./navbar.vue";
defineProps({
    errors: Object,
});

const form = useForm({
    name: null,
    email: null,
    phone: null,
});

function submit() {
    router.post("/customers", form);
}
</script>

<template>
    <Navbar />

    <div class="container-fluid mt-5">
        <form @submit.prevent="submit">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input
                    type="text"
                    class="name form-control"
                    id="name"
                    name="name"
                    v-model="form.name"
                />
                <div class="text-danger text-xs" v-if="errors.name">
                    {{ errors.name }}
                </div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input
                    type="email"
                    class="email form-control"
                    id="email"
                    name="email"
                    v-model="form.email"
                />
                <div class="text-danger text-xs" v-if="errors.email">
                    {{ errors.email }}
                </div>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input
                    type="text"
                    class="phone form-control"
                    id="phone"
                    name="phone"
                    v-model="form.phone"
                />
                <div class="text-danger text-xs" v-if="errors.phone">
                    {{ errors.phone }}
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</template>

<style></style>
