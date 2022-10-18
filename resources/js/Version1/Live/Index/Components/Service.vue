<template>
  <div>
    <div class="border-t border-gray-100 dark:border-zinc-300/20"></div>
    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 mt-20">

      <div class="relative h-72 w-full rounded-md pl-0 lg:pr-5">
        <img src="http://web.personal/assets/images/programming-1.JPG"
             class="object-cover w-full block h-full rounded-md"
        />
      </div>
      <div class="mt-10 lg:mt-0 pl-0 lg:pl-5">
        <h3 class="font-bold tracking-tight text-gray-800 dark:text-gray-100">Web Engineer</h3>
        <p class="my-6 text-base text-gray-600 dark:text-gray-400">
          The goal is to develop and integrate both front-end and back-end based
          applications then deliver a robust product that meets both technical and consumer needs.
        </p>
        <inertia-link class="text-sm dark:text-teal-600" :href="route('bio')">
          See more in Bio...
        </inertia-link>
<!--        <button-link :href="route('bio')" class="flex mt-6">
          <user-icon class="h-4 w-4 mr-1" /> See more in Bio
        </button-link>-->
      </div>

      <div class="mt-10 lg:mt-20 order-last lg:order-none pl-0 lg:pr-5">
        <h3 class="font-bold tracking-tight text-gray-800 dark:text-gray-100">Street Photographer</h3>
        <p class="my-6 text-base text-gray-600 dark:text-gray-400">
          The opportunity to capture people in their most honest state is something that I really love about
          this style of photography. <br><br>
          <i>"The best thing about a picture is that it never changes, even when the people in it do."</i>
          <i class="block mt-2 text-right">- Andy Warhol</i>
        </p>
        <inertia-link class="text-sm dark:text-teal-600" :href="route('gallery')">
          See more in gallery...
        </inertia-link>
<!--        <button-link :href="route('gallery')" class="flex mt-6">
          <photo-icon class="h-4 w-4 mr-1" /> See more in gallery
        </button-link>-->
      </div>
      <div class="relative mt-20 pl-0 lg:pl-5 h-72 w-full rounded-md">
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