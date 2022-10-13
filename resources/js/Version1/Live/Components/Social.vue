<template>
  <div class="flex space-x-4 md:order-2">
    <a v-for="item in social" :key="item.name" :href="item.href" class="text-gray-600 hover:text-gray-700">
      <span class="sr-only">{{ item.name }}</span>
      <component :is="item.icon" class="h-5 w-5" aria-hidden="true" />
    </a>
  </div>
</template>

<script>
export default {
  name: "Social",

  computed: {
    social() { return this.socialObject() }
  }
}
</script>

<style scoped>

</style>