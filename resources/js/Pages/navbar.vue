<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="nav">
            <div class="container">
                <Link class="navbar-brand" href="#"
                    ><img
                        src="/assets/logo/logo.png"
                        style="max-height: 100px; max-width: 100px"
                /></Link>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent"
                >
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <Link class="nav-link" href="/">Customers</Link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</template>

<style></style>
