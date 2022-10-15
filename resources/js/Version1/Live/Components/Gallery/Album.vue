<template>
  <div class="relative h-52 hover:opacity-60">
    <img class="w-full h-full object-cover" :src="album.cover.path" />
    <div class="absolute bottom-0 h-full left-0 right-0 px-4 py-2 bg-gray-800 opacity-40">
    </div>
    <div class="overflow-y-hidden absolute text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 ">
      <h3 class="text-center underline text-lg text-white font-normal">
        <inertia-link :href="album.link">{{ album.title }}</inertia-link>
      </h3>
      <!--        <p class="mt-3 text-sm text-gray-200">
                Event last July 2022. Places Magellan's Cross, Magallanes Street, Colon Street, Carbon Public Market
              </p>-->
    </div>
  </div>
</template>

<script>
export default {
  name: "Album",

  props: ['album']
}
</script>

<style scoped>

</style>