<template>
    <div>
        <!--About.vue Section-->
        <div id="about" class="relative py-16 overflow-hidden md:py-40 lg:py-64 xl:py-72">
            <div class="relative max-w-screen-xl px-8 mx-auto space-y-16 md:space-y-0 md:flex md:items-center">
                <div style="z-index: -9999;" class=" hidden md:transform md:-translate-x-1/2 md:absolute md:inset-y-0 md:left-0 md:h-full md:flex md:items-center">
                    <video class="w-full" :poster="video.poster" playsinline="" autoplay="" muted="" loop="">
                        <source :src="video.source" type="video.type">
                    </video>
                </div>
                <div class="max-w-lg md:max-w-auto md:w-1/2">
                    <img class="w-full" :src="assets.img" alt="Vapor">
                </div>
                <div class="md:w-1/2 md:pl-8 lg:pl-24">
                    <h2 class="font-bold text-3xl tracking-tight sm:text-4xl lg:text-5xl lg:leading-tight xl:text-5xl text-red-600">About us</h2>
                    <p class="mt-3 max-w-xl text-gray-600 sm:mt-5 md:max-w-2xl md:mt-8 md:text-lg lg:pl-2">We are a team of web developers from Romania, more precisely from Bucharest. With a cumulative experience of over 10 years and hundreds of successfully completed projects. We are looking for long-term and prosperous collaborations on both sides.</p>
                    <a class="group relative h-12 inline-flex w-64 border border-red-600 sm:w-56 focus:outline-none mt-6 sm:mt-8 md:mt-10 transform transition hover:scale-105 duration-300 ease-in-out" :href="nav.contact">
                        <span class="rounded absolute inset-0 inline-flex items-center justify-center self-stretch px-6 text-white text-center font-bold bg-red-600 ring-1 ring-red-600 ring-offset-1 ring-offset-red-600 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                            Contact us!
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <!--Why us? Section-->
        <section class="relative bg-white">
            <div class="container mx-auto overflow-hidden">
                <div class="flex flex-wrap items-center">
                    <div class="w-full md:w-6/12 px-4 mr-auto ml-auto">
                        <div class="justify-center flex flex-wrap relative">
                            <div class="my-4 w-full lg:w-6/12 px-4">
                                <div class="bg-blue-400 shadow-lg rounded-lg text-center p-8 transform transition hover:scale-105 duration-300 ease-in-out">
                                    <img alt="..." class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white" src="https://img-learnstack-io.sgp1.digitaloceanspaces.com/tool/8zXV6ZD5ZtYQgI9m200SEKubJ2Rjw5sSX5DskjtQ.png">

                                    <p class="text-lg text-white mt-4 font-semibold">Tailwind</p>
                                    <p class="text-base text-white opacity-75 mt-2">Is a CSS framework for implementing custom designs.</p>

                                </div>
                                <div class="bg-green-500 shadow-lg rounded-lg text-center p-8 transform transition hover:scale-105 duration-300 ease-in-out mt-8">
                                    <img alt="..." class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/vue.jpg">

                                    <p class="text-lg text-white mt-4 font-semibold">Vue.js</p>
                                    <p class="text-base text-white opacity-75 mt-2">An open-source Model–view–viewmodel JavaScript framework for building user interfaces.</p>
                                </div>
                            </div>
                            <div class="my-4 w-full lg:w-6/12 px-4 lg:mt-16">
                                <div class="bg-yellow-400 shadow-lg rounded-lg text-center p-8 transform transition hover:scale-105 duration-300 ease-in-out">
                                    <img alt="..." class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/js.png">
                                    <p class="text-lg text-white mt-4 font-semibold">JavaScript</p>
                                    <p class="text-base text-white opacity-75 mt-2">Object-oriented programming language that conforms to the ECMAScript specification.</p>
                                </div>
                                <div class="bg-red-600 shadow-lg rounded-lg text-center p-8 transform transition hover:scale-105 duration-300 ease-in-out mt-8 ">
                                    <img alt="..." class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white" src="https://www.mavenlogix.org/wp-content/uploads/2019/01/laravel-512.png">
                                    <p class="text-lg text-white mt-4 font-semibold">Laravel</p>
                                    <p class="text-base text-white opacity-75 mt-2">A PHP-based open-source back-end web framework.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-4/12 px-12 md:px-4 ml-auto mr-auto">
                        <h3 class="text-3xl mb-2 font-semibold leading-normal text-red-600">Why choose us?</h3>
                        <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">To us, it's not just work - we take pride in the solutions we deliver. We encourage each other to achieve excellence in all endeavours and aren't satisfied until projects meet our own personal high standards. <br><br>Please take a look at Our Skills to see how we will bring your project into existance.</p>

                        <div class="block">
                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-600 border-gray-600 border-solid border-2 bg-white uppercase last:mr-0 mr-2 mt-2 transform transition hover:scale-105 duration-300 ease-in-out">HTML</span>
                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-600 bg-white uppercase last:mr-0 mr-2 mt-2 border-gray-600 border-solid border-2 transform transition hover:scale-105 duration-300 ease-in-out">CSS</span>
                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-600 bg-white uppercase last:mr-0 mr-2 mt-2 border-gray-600 border-solid border-2 transform transition hover:scale-105 duration-300 ease-in-out">PHP</span>
                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-600 bg-white uppercase last:mr-0 mr-2 mt-2 border-gray-600 border-solid border-2 transform transition hover:scale-105 duration-300 ease-in-out">JavaScript</span>
                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-600 bg-white uppercase last:mr-0 mr-2 mt-2 border-gray-600 border-solid border-2 transform transition hover:scale-105 duration-300 ease-in-out">Laravel</span>
                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-600 bg-white uppercase last:mr-0 mr-2 mt-2 border-gray-600 border-solid border-2 transform transition hover:scale-105 duration-300 ease-in-out">Vue</span>
                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-600 bg-white uppercase last:mr-0 mr-2 mt-2 border-gray-600 border-solid border-2 transform transition hover:scale-105 duration-300 ease-in-out">Tailwind</span>
                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-600 bg-white uppercase last:mr-0 mr-2 mt-2 border-gray-600 border-solid border-2 transform transition hover:scale-105 duration-300 ease-in-out">React</span>
                        </div>
                        <a class="group relative h-12 inline-flex w-64 border border-red-600 sm:w-56 focus:outline-none mt-6 sm:mt-8 md:mt-10 transform transition hover:scale-105 duration-300 ease-in-out" :href="nav.portfolio">
                        <span class="rounded absolute inset-0 inline-flex items-center justify-center self-stretch px-6 text-white text-center font-bold bg-red-600 ring-1 ring-red-600 ring-offset-1 ring-offset-red-600 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                            Live Demos
                        </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    data() {
        return {
            video: {
                type: 'video/mp4',
                poster: '/assets/images/blocks.jpg',
                source: '/assets/videos/blocks.mp4'
            },
            assets: {
                img: '/assets/images/hero.png'
            },
            nav: {
                portfolio: '#portfolio',
                services: '#services',
                contact: '#contact'
            }
        }
    }
}
</script>
