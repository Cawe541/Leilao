<script setup lang="ts">

</script>

<template layout>
    <main class="grid md:grid-cols-2 m-10 md:shadow-2xl">
        <section class="md:flex">
            <img src="@/img/golden_hammer-2.jpg" alt="martelo de ouro" class="sm:hidden">
            <img src="@/img/golden_hammer-3.jpg" alt="martelo de ouro"
                class="max-w-0 md:max-w-full  invisible md:visible md:w-full">
        </section>
        <aside class="md:p-5">
            <h1 class="text-center text-lg mt-3 md:my-10">Login</h1>
            <form class="flex flex-col">
                <label for="email">Email:</label>
                <input name="email" type="text" class="border-2 border-gray-400 mb-5">
                <label for="senha">Senha:</label>
                <input name="senha" type="text" class="border-2 border-gray-400">
                <button class="border-2 border-slate-300 bg-blue-500 text-white rounded-lg p-2 mt-16">Entrar</button>
                <button
                    class="border-2 border-slate-300 bg-red-500 text-white rounded-lg p-2 mt-10 mb-5">Voltar</button>
            </form>
        </aside>
    </main>
</template>