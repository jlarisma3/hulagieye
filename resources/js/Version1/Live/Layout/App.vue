<template>
  <div id="main-content">
    <div class="fixed inset-0 flex justify-center sm:px-8">
      <div class="flex w-full max-w-7xl lg:px-8">
        <div class="w-full bg-white ring-1 ring-gray-100 dark:bg-zinc-900 dark:ring-zinc-300/20">
        </div>
      </div>
    </div>
    <div class="relative">
      <app-header />
      <main>
        <slot name="content" />
      </main>
      <app-footer />
    </div>
  </div>
</template>

<script>

import Wrap from "./Components/Wrap";
import AppFooter from "@/Version1/Live/Layout/Components/Footer";
import AppHeader from "./Components/Header";
export default {
  name: "App",

  components: {
    Wrap,
    AppHeader,
    AppFooter
  }
}
</script>

<style scoped>

</style>