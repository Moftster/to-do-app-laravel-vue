<template>
    <header>
        <div class="bg-indigo-50 p-4 flex justify-between items-center">
            <!-- Left side -->
            <div class="flex items-center">
                <img src="https://cdn2.iconfinder.com/data/icons/new-year-s-hand-drawn-basic/64/checklist-256.png" alt="Logo" width="70" class="mr-3">

                <router-link to="/" class="inline-block p-2 text-gray-900 hover:text-gray-600">Landing</router-link>
                <router-link to="/home" class="inline-block p-2 text-gray-900 hover:text-gray-600">Home</router-link>
                <router-link to="/about" class="inline-block p-2 text-gray-900 hover:text-gray-600">About</router-link>
            </div>

            <!-- Right side -->
            <div>
                <a class="inline-block p-2 text-gray-900 hover:text-gray-600" href="#">Login</a>
                <a class="inline-block p-2 text-gray-900 hover:text-gray-800 bg-indigo-400 hover:bg-indigo-500 rounded ml-5 mr-5 transition ease-in duration-150" href="#">Sign up</a>
            </div>

        </div>
    </header>
</template>

<script>
export default {
    
}
</script>