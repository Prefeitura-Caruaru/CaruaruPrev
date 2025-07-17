<template>
    <div class="min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('/images/bg.webp')">
        <div class="bg-white p-12 rounded-lg shadow-xl xl:w-1/4 lg:w-2/4 sm:w-2/4 md:w-2/4 w-11/12">
            <form @submit.prevent="login">
                <div class="w-full">

                    <div class="w-2/3 mx-auto">
                        LOGO
                    </div>     

                    <div class="mt-4">
                        <h3 class="text-center font-bold text-2xl">Therapy</h3>
                    </div>

                    <div class="mt-4">
                        <label for="login" class="label">Login</label>
                        <input type="text" id="login" class="input" v-model="form.login" />
                        <div class="input-error" v-if="form.errors.login">{{ form.errors.login }}</div>
                    </div>

                    <div class="mt-4">
                        <label for="password" class="label">Senha</label>
                        <input type="password" id="password" class="input" v-model="form.password" />
                        <div class="input-error" v-if="form.errors.password">{{ form.errors.password }}</div>
                    </div>

                    <div class="mt-8">
                        <button class="btn-primary w-full" type="submit">Entrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>


<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    login: null,
    password: null
})
const login = () => form.post(route('login.store'))
</script>