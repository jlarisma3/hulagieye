<template>
  <footer class="mt-20">
      <wrap :border="true">
        <template #wrap-content>
          <div class="text-center pt-10 pb-10 dark:border-zinc-700/40">
            <nav class="-mx-5 -my-2 flex flex-wrap justify-center" aria-label="Footer">
              <div v-for="item in $page.props.navigations" :key="item.title" class="px-5 py-2">
                <inertia-link :href="item.route" class="text-sm text-gray-700 hover:text-gray-900">{{ item.title }}</inertia-link>
              </div>
            </nav>
            <div class="mt-6 flex justify-center space-x-6">
              <social />
            </div>
            <p class="mt-6 text-sm text-gray-400 font-medium">&copy;{{ new Date().getFullYear() }} Hulag.iEye, Inc. All rights reserved.</p>
          </div>
        </template>
      </wrap>
  </footer>
</template>

<script>
import Social from "../../Components/Social";
import Wrap from "./Wrap";
import {defineComponent, h} from "vue";

export default {
  name: "Footer",

  components: { Wrap, Social },

  computed: {
    nav() { return this.navigationObject() }
  }
}
</script>

<style scoped>

</style>