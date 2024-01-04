<template>
    <Head title="Cursos" />

    <AuthenticatedLayout>
        <template #header>
            Crear Curso
        </template>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 border-b border-gray-200">
                <div>
                    <form @submit.prevent="submit">
                        <div class="grid gap-6 mb-6 lg:grid-cols">
                            <div>
                                <label for="nombre" class="block mb-2 text-sm font-medium text-black">Nombre Del Curso</label>
                                <input type="text" v-model="form.nombre"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Nombre del curso a registrar" required>
                            </div>

                        </div>
                        <div class="w-100">
                            <PrimaryButton type="button" @click="submit()" class="block w-full">Registrar Curso
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
import { Head } from '@inertiajs/vue3';
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'
import PrimaryButton from '@/Components/PrimaryButton.vue';

const props = defineProps({
    categorias: Object
})

const form = reactive({
    nombre: '',
})

function submit() {
    router.post('/cursos', form)
}

</script>
