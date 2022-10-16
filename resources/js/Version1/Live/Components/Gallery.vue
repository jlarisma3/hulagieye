<template>
  <div class="bg-white dark:bg-zinc-900">
    <div class="relative columns-1 sm:columns-3 gap-1">
        <inertia-link :href="route('gallery')">
          <div
              class="text-green-900 dark:text-white dark:bg-green-900 hover:opacity-70 text-sm font-bold flex items-center jusify-center rounded-md px-1 ml-3 mt-3 bg-white absolute top-0 z-40">
            <photo-icon class="h-10 w-10" />
          </div>
        </inertia-link>
        <div v-for="(item, i) in $page.props.images" :key="item.name"
             class="relative mt-1"
             :class="{
          'aspect-w-16 aspect-h-9': item.isPortrait == true,
          'aspect-w-1 aspect-h-1' : item.isPortrait == false,
          'mt-0' : i == 0, 'sm:mt-0' : i == 3 || i == 6, 'sm:block' : i > 3
        }">
          <img :src="item.path" class="w-full object-cover"/>
        </div>
    </div>
  </div>
</template>

<script>
import { PhotoIcon } from "@heroicons/vue/24/solid";

export default {
  components: {
    PhotoIcon
  },

  data() {
    return {
      overlaycaption: false
    }
  }
}

</script>