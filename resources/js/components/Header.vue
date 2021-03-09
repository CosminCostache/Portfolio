<template>
    <!--Nav-->
    <div class="fixed w-full z-30 top-0 bg-white">

        <div id="header" class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-3">

            <div class="pl-4 flex items-center">
                <a class="text-red-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="/">
                    {{ brand }}
                </a>
            </div>

            <!--Mobile nav-->
            <div class="flex lg:hidden pr-4">
                <ul class="list-reset flex justify-end flex-1 items-center">
                    <li class="mr-3">
                        <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" :href="nav.portfolio">Portfolio</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" :href="nav.services">Services</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" :href="nav.contact">Contact</a>
                    </li>
                </ul>
            </div>

            <!--Menu-->
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white text-black p-4 lg:p-0 z-20" id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mr-3">
                        <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" :href="nav.portfolio">Portfolio</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" :href="nav.services">Services</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" :href="nav.contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="border-b border-gray-600 opacity-25 my-0 py-0" />
    </div>
</template>

<script>
    export default {
        data() {
            return {
                brand: 'Fast Deploy',
                nav: {
                    portfolio: '#portfolio',
                    services: '#services',
                    contact: '#contact'
                }
            }
        }
    }
</script>
