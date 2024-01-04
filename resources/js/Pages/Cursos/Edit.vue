<template>
    <Head title="Cursos" />

    <AuthenticatedLayout>
        <template #header>
            Editar Curso
        </template>

        <div class="py-5 flex justify-end">
            <Link :href="route('cursos.index')"
                class="p-1.5 border bg-orange-400 hover:bg-white hover:text-orange-400 hover:border-orange-400 transition-all ease-in-out duration-300 text-white uppercase rounded-lg outline-none shadow-lg">
            Atras</Link>
        </div>



        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 border-b border-gray-200">
                <div>
                    <form @submit.prevent="submit">
                        <div class="grid gap-6 mb-6 lg:grid-cols-2">
                            <div>
                                <label for="nombre" class="block mb-2 text-sm font-medium text-black">Nombre del Curso</label>
                                <input type="text" v-model="form.nombre"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Url del logo del canal" required>
                            </div>
                        </div>
                        <div class="w-100">
                            <PrimaryButton type="button" @click="submit(props.curso.id)" class="block w-full">Editar Curso
                            </PrimaryButton>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'
import PrimaryButton from '@/Components/PrimaryButton.vue';

const props = defineProps({
    curso: Object
})

const form = reactive({
    nombre: props.curso.curso
})

function submit(id) {
    router.put(`/cursos/${id}`, form)
}


</script>
