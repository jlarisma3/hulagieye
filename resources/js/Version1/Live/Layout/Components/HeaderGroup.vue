<template>
  <span class="isolate inline-flex rounded-md shadow-sm">
    <button v-for="item in navigation" :href="item.link" :key="item.name" type="button" class="relative inline-flex items-center rounded-l-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
      {{ item.name }}
    </button>
  </span>
</template>

<script>
export default {
  name: "HeaderGroup",

  setup() {
    const navigation = [
      {
        name: "Bio",
        link: "#bio"
      },
      {
        name: "Gallery",
        link: "#gallery"
      },
      {
        name: "Contact Info",
        link: "#contact"
      }

    ];
    return {
      navigation
    }
  },
}
</script>

<style scoped>

</style>