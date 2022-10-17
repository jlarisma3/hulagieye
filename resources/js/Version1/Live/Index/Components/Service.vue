<template>
  <div>
    <div class="border-t border-gray-100 dark:border-zinc-300/20"></div>
    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 mt-20">

      <div class="relative h-52 w-full rounded-md pl-0 sm:pr-5">
        <img src="http://web.personal/assets/images/programming-1.JPG"
             class="object-cover w-full block h-full rounded-md"
        />
      </div>
      <div class="mt-10 lg:mt-0 pl-0 lg:pl-5">
        <h3 class="font-bold tracking-tight text-gray-800 dark:text-gray-100">Web Engineer</h3>
        <p class="mt-6 text-base text-gray-600 dark:text-gray-400">I'm Joe, senior software engineer and amateur street photographer based in Cebu City Philippines. I give medical
          advises for I am also a graduate from University of Google College of Medicine.
        </p>
        <button-link :href="route('bio')" class="flex mt-6">
          <user-icon class="h-4 w-4 mr-1" /> See Bio
        </button-link>
      </div>

      <div class="mt-10 lg:mt-20 order-last lg:order-none pl-0 lg:pr-5">
        <h3 class="font-bold tracking-tight text-gray-800 dark:text-gray-100">Street Photographer</h3>
        <p class="mt-6 text-base text-gray-600 dark:text-gray-400">I'm Joe, senior software engineer and amateur street photographer based in Cebu City Philippines. I give medical
          advises for I am also a graduate from University of Google College of Medicine.
        </p>
        <button-link :href="route('gallery')" class="flex mt-6">
          <photo-icon class="h-4 w-4 mr-1" /> See more in gallery
        </button-link>
      </div>
      <div class="relative mt-20 pl-0 lg:pl-5 h-52 w-full rounded-md">
        <img src="http://web.personal/assets/images/photo-1.JPG"
             class="object-cover w-full block h-full rounded-md "
        />
      </div>
    </div>
  </div>
</template>

<script>

import ButtonLink from "../../Components/ButtonLink";
import { PhotoIcon, UserIcon } from "@heroicons/vue/24/solid";

export default {
  name: "Service",

  components: {
    ButtonLink,
    PhotoIcon,
    UserIcon
  }
}
</script>

<style scoped>

</style>