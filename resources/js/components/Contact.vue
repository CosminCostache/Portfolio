<template>
    <div id="contact" class="relative overflow-hidden">

        <section class="pt-40">
            <div style="z-index: -9998" class="hidden md:transform md:translate-x-1/4 md:absolute md:-top-24 md:-right-48 md:flex md:items-center lg:-top-32 xl:-top-48">
                <video poster="/assets/images/blocks_1.jpg" playsinline="" autoplay="" muted="" loop="">
                    <source src="/assets/videos/blocks_1.mp4" type="video/mp4">
                </video>
            </div>
        </section>

        <div class="max-w-screen-xl mx-auto px-8 py-20">
            <form @submit.prevent="submit" class="form shadow bg-opacity-10 bg-gray-400 sm:rounded-md p-6 my-10 relative">
                <h3 class="text-4xl text-red-600 font-semibold">Contact us!</h3>
                <p class="mt-3 max-w-xl text-gray-600 sm:mt-5 md:max-w-2xl md:mt-8 md:text-lg">Contact us, we are ready to answer your questions and start the project</p>

                <div class="flex space-x-5 mt-3">
                    <input type="text" name="name" id="name" placeholder="Name" v-model="fields.name" class="border p-2  w-1/2">
                    <div v-if="errors && errors.name" class="text-red-600">{{ errors.name[0] }}</div>
                    <input type="text" name="company" id="company" placeholder="Company" v-model="fields.company" class="border p-2  w-1/2">
                    <div v-if="errors && errors.company" class="text-red-600">{{ errors.company[0] }}</div>
                </div>

                <div class="flex space-x-5 mt-3">
                    <input type="email" name="email" id="email" placeholder="Email" v-model="fields.email" class="border p-2 w-1/2 mt-3">
                    <div v-if="errors && errors.email" class="text-red-600">{{ errors.email[0] }}</div>

                    <input type="tel" name="phone" id="phone" placeholder="Phone Number" v-model="fields.phone" class="border p-2 w-1/2 mt-3">
                    <div v-if="errors && errors.phone" class="text-red-600">{{ errors.phone[0] }}</div>

                </div>

                <textarea name="message" id="message" cols="10" rows="3" placeholder="Tell us about your project" v-model="fields.message" class="border p-2 mt-3 w-full"></textarea>
                <div v-if="errors && errors.message" class="text-red-600">{{ errors.message[0] }}</div>

                <p class="font-bold text-sm mt-3">GDPR Agreement *</p>
                <div class="flex items-baseline space-x-2 mt-2">
                    <input type="checkbox" name="checkbox" id=checkbox class="inline-block">
                    <p class="text-gray-600 text-sm">I consent to having this website store my submitted information so they can respond to my inquiry.</p>
                </div>

                <input type="submit" value="Submit" class="w-full mt-6 bg-red-600 text-white font-semibold p-3">

                <div v-if="success" class="alert alert-success mt-3">
                    Message sent!
                </div>
            </form>
        </div>

    </div>
</template>

<script>
export default {
    data() {
        return {
            fields: {},
            errors: {},
            success: false,
            loaded: true,
        }
    },
    methods: {
        submit() {
            if (this.loaded) {
                this.loaded = false;
                this.success = false;
                this.errors = {};
                axios.post('/submit', this.fields).then(response => {
                    this.fields = {}; //Clear input fields.
                    this.loaded = true;
                    this.success = true;
                }).catch(error => {
                    this.loaded = true;
                    if (error.response.status === 422) {
                        this.errors = error.response.data.errors || {};
                    }
                });
            }
        },
    },
}
</script>
