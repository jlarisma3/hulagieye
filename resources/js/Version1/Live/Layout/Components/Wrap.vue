<template>
  <div class="sm:px-8">
    <div class="mx-auto max-w-7xl lg:px-8">
      <div :class="{'border-t border-gray-100 dark:border-zinc-300/20' : border}" class="relative px-4 sm:px-8 lg:px-12">
        <div class="mx-auto max-w-2xl lg:max-w-5xl">
          <slot name="wrap-content" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Wrap",

  props: ['border']
}
</script>

<style scoped>

</style>