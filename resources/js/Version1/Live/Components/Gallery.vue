<template>
  <div class="bg-white">
    <div class="relative columns-1 sm:columns-3 gap-3">
        <a :href="route('gallery')">
          <div class="text-green-900 opacity-40 hover:opacity-90 text-sm font-bold flex items-center jusify-center rounded-md px-1 ml-3 mt-3 bg-white absolute top-0 z-40">
            <photo-icon class="h-6 w-6 mr-1" /> View gallery
          </div>
        </a>
        <div v-for="(item, i) in $page.props.images" :key="item.name"
             class="relative mt-3"
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