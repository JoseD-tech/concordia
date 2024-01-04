<template>
    <Head title="Inicio de Sesion" />

    <div class="bg-gray-100 flex justify-center items-center h-screen">
        <!-- Left: Image -->
        <div class="w-1/2 h-screen hidden lg:block">
            <img src="https://placehold.co/800x/667fff/ffffff.png?text=Your+Image&font=Montserrat" alt="Placeholder Image"
                class="object-cover w-full h-full">
        </div>
        <!-- Right: Login Form -->
        <div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
            <h1 class="text-2xl font-semibold mb-8 text-center uppercase">Ingresar al sistema</h1>
            <form @submit.prevent="submit">
                <!-- Email Input -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-600">Correo Electronico</label>
                    <input id="email" type="email" v-model="form.email" required autofocus name="Ingresa tu correo"
                        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
                        autocomplete="off">
                        <InputError class="mt-2" :message="form.errors.email" />
                </div>
                <!-- Password Input -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-600">Clave</label>
                    <input type="password" id="password" name="password" v-model="form.password"
                        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
                        autocomplete="off">
                        <InputError class="mt-2" :message="form.errors.password" />
                </div>
                <!-- Login Button -->
                <button type="submit"
                    class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-md py-4 px-4 w-full">Iniciar Sesion</button>
            </form>
        </div>
    </div>
</template>

<script setup>
import InputError from '@/Components/InputError.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>
