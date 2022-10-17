<template>
<inertia-link
    :href="href"
    class="inline-flex
    items-center
    rounded
    border
    border-transparent
    bg-green-600
    dark:bg-teal-600
    px-2.5 py-1.5
    text-xs
    font-medium
    text-white
    shadow-sm
    hover:bg-green-700
    dark:hover:bg-teal-700
    focus:outline-none
    focus:ring-1
    dark:focus:ring-teal-500
    focus:ring-green-500
    focus:ring-offset-1"
>
  <slot></slot>
</inertia-link>
</template>

<script>
export default {
  name: "ButtonLink",

  props: ['href']
}
</script>

<style scoped>

</style>