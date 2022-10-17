<template>
  <div class="sm:px-8">
    <div class="mx-auto max-w-7xl lg:px-8">
      <div class="relative">
        <slot name="wrap-content" />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "WrapNoSpace"
}
</script>

<style scoped>

</style>