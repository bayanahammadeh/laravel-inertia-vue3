<script setup>
import { router } from "@inertiajs/vue3";
import Navbar from "./navbar.vue";

defineProps({ customers: Object });

function destroy(id) {
    router.delete("/customers/" + id);
}

function edit(id) {
    router.get("/customers/" + id + "/edit");
}
</script>

<template>
    <Navbar />

    <div class="container mt-25" style="background-color: #fff">
        <div v-if="$page.props.flash.message" class="alert alert-success">
            <strong>{{ $page.props.flash.message }}</strong>
        </div>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>...</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="customer in customers">
                    <td>{{ customer.name }}</td>
                    <td>{{ customer.email }}</td>
                    <td>{{ customer.phone }}</td>
                    <td>
                        <button
                            @click.prevent="edit(customer.id)"
                            class="btn btn-outline-primary"
                        >
                            Edit</button
                        >&nbsp;&nbsp;
                        <button
                            @click.prevent="destroy(customer.id)"
                            class="btn btn-outline-danger"
                        >
                            Del
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<style></style>
