<template lang="">
    <div class="mt-10">
        <form class="max-w-md mx-auto p-4 bg-gray-400 shadow-md rounded" @submit.prevent="storeProduct(form)">
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                <input type="text" id="name" v-model="form.name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <div v-if="errors.name">
                    <span class="text-sm text-red-500">{{errors.name[0]}}</span>
                </div>
            </div>
            <div class="mb-6">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrição</label>
                <input type="text" id="description" v-model="form.description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <div v-if="errors.description">
                    <span class="text-sm text-red-500">{{errors.description[0]}}</span>
                </div>
            </div>
            <div class="mb-6">
                <label for="tension" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tensão</label>
                <input type="text" id="tension" v-model="form.tension" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <div v-if="errors.tension">
                    <span class="text-sm text-red-500">{{errors.tension[0]}}</span>
                </div>
            </div>
            <div class="mb-6">
                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Marca</label>
                <input type="text" id="brand" v-model="form.brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <div v-if="errors.brand">
                    <span class="text-sm text-red-500">{{errors.brand[0]}}</span>
                </div>
            </div>
            <div class="mt-4">
                <button type="submit" class="px-4 py-2  bg-yellow-200 hover:bg-yellow-400 rounded text-black">Criar</button>
            </div>
        </form>
    </div>
</template>
<script setup>
import { reactive } from 'vue'
import useProducts from '@/composables/products'
const { storeProduct, errors } = useProducts()

const form = reactive({
    name: '',
    description: '',
    tension: '',
    brand: ''
})
</script>