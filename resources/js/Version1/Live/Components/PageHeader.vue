<template>
  <div class="max-w-2xl">
    <h1 class="text-4xl font-bold tracking-tight text-gray-800 dark:text-gray-100 sm:text-5xl">
      <slot name="title" />
    </h1>
    <p class="mt-6 text-base text-gray-600 dark:text-gray-400">
      <slot name="details" />
    </p>
  </div>
</template>

<script>
export default {
  name: "PageHeader"
}
</script>

<style scoped>

</style>