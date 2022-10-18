<template>
  <div>
    <div class="mb-1 text-sm font-medium dark:text-gray-400">{{ config.label }}</div>
    <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
      <div class="bg-blue-600 h-2.5 rounded-full dark:bg-teal-500" :style="'width: ' + width"></div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ProgressBar",
  props: ['config'],
  computed: {
    width() {
      let score = 10;
      return Math.ceil((this.config.score / score) * 100) + '%';
    }
  }
}
</script>

<style scoped>

</style>