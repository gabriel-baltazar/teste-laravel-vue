<template>
    <div class="mt-10">
        <div class="flex justify-end m-2 p-2">
            <RouterLink :to="{ name: 'ProductCreate' }"
                class="px-4 py-2  bg-yellow-200 hover:bg-yellow-400 rounded text-black">Novo produto</RouterLink>
        </div>
        <div class="text-white px-2 py-2" v-if="products.length === 0">
            Nenhum produto cadastrado.
        </div>

        <div v-show="products.length > 0" class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nome
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Descrição
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tensão
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Marca
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ações
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="product in products" :key="product.id"
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="py-4 px-6">
                            {{ product.name }}
                        </td>
                        <td class="py-4 px-6">
                            {{ product.description }}
                        </td>
                        <td class="py-4 px-6">
                            {{ product.tension }}
                        </td>
                        <td class="py-4 px-6">
                            {{ product.brand }}
                        </td>
                        <td class="py-4 px-6 space-x-2">
                            <RouterLink :to="{ name: 'ProductEdit', params: { id: product.id } }"
                                class="px-4 py-2 bg-green-200 hover:bg-green-400 rounded text-black text-sm">
                                Editar
                            </RouterLink>
                            <button @click="destroyProduct(product.id)"
                                class="px-4 py-2 bg-red-200 hover:bg-red-400 rounded text-black text-sm">
                                Excluir
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
<script setup>
import useProducts from '@/composables/products'
import { onMounted } from 'vue';
import { RouterLink } from 'vue-router';
const { products, getProducts, destroyProduct } = useProducts();
onMounted(() => getProducts())
</script>