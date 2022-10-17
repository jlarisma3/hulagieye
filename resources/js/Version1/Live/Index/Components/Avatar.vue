<template>
  <div class="transition-opacity mx-auto mt-10 h-24 w-24 lg:mx-0 lg:h-20 lg:w-20 lg:mt-0 rounded-full bg-white/90 p-0.5 dark:bg-zinc-900 backdrop-blur">
    <img alt=""
         sizes="4rem"
         :src="path + '/storage/avatar/avatar.JPG'"
         decoding="async" data-nimg="future"
         class="rounded-full bg-gray-100 dark:bg-zinc-900 object-cover h-full w-full"
         style="color:transparent"
    >
  </div>
</template>

<script>
export default {
  name: "Avatar",

  computed: {
    path() {
      return window.publicPath;
    }
  }
}
</script>

<style scoped>

</style>