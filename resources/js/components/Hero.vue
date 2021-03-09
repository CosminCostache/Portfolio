<template>
    <div>
        <!--Hero Section-->
        <div class="pt-24">
            <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
                <!--Mobile video first-->
                <div class="w-full md:w-3/5 py-6 text-center sm:hidden">
                    <video :poster="video.poster">
                        <source :src="video.source" :type="video.type">
                    </video>
                </div>
                <!--Left Col-->
                <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
                    <h2 class="my-4 text-5xl font-bold leading-tight text-gray-900">
                        <span class="text-red-600">{{ brand }}</span><br>{{ descriptions.title }}
                    </h2>
                    <p class="leading-normal text-2xl mb-8 text-gray-600">
                        {{ descriptions.short }}
                    </p>
                    <button class="mx-auto lg:mx-0 hover:no-underline bg-red-600 text-white font-bold rounded my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        <a :href="toAbout">Get Started!</a>
                    </button>
                </div>
                <!--Right Col-->
                <div class="w-full md:w-3/5 py-6 text-center sm-hidden">
                    <video :poster="video.video2.poster" playsinline="" autoplay="" muted="" loop="">
                        <source :src="video.video2.source" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return  {
            brand: 'Fast Deploy',
            video: {
                type: 'video/mp4',
                video1: {
                    poster: '/assets/images/hero_poster.jpg',
                    source: '/assets/videos/hero.mp4'
                },
                video2: {
                    poster: '/assets/images/hero_poster.jpg',
                    source: '/assets/videos/hero.mp4'
                }
            },
            descriptions: {
                title: 'Web Development Agency',
                short: 'We provide professional and modern, custom, WebSites, Web Apps, CRM, CMS, eCommerce platform, whatever suit your business needs.'
            },
            toAbout: '#about'
        }
    }
}
</script>
