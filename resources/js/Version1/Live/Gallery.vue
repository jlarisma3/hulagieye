<template>
  <app-layout>
    <template #content>
      <wrap class="mt-16 sm:mt-32">
        <template #wrap-content>
          <div class="mt-9">
            <div class="max-w-2xl">
              <h1 class="text-4xl font-bold tracking-tight text-gray-800 sm:text-5xl">
                Daily Street Photos, Travel, and anything in between.
              </h1>
              <p class="mt-6 text-base text-zinc-600">
                I'm Joe, senior software engineer and amateur street photographer based in Cebu City Philippines. I give medical
                advises for I am also a graduate from University of Google College of Medicine.
              </p>
            </div>
          </div>
<!--            <div class="mx-auto w-4/5 mt-20">
              &lt;!&ndash; photowalk &ndash;&gt;
              <album :album="sample" class="h-96" />
              &lt;!&ndash; lava farm &ndash;&gt;
              <album :album="sample" class="h-96 mt-24" />
              &lt;!&ndash; noir &ndash;&gt;
              <album :album="sample" class="mt-24 h-96" />
              &lt;!&ndash; random people &ndash;&gt;
              <album :album="sample" class="mt-24 h-96" />
              &lt;!&ndash; pasigarbo sa sugbo &ndash;&gt;
              <album :album="sample" class="mt-24 h-96" />
              &lt;!&ndash; street daily &ndash;&gt;
              <album :album="sample" class="mt-24 h-96" />
            </div>-->
            <!--          <div class="mt-20 columns-1 sm:columns-3 gap-6 space-y-6">
            <template v-for="(n, i) in 6">
              <album
                  :album="sample"
                  :class="{
                    'aspect-w-16 aspect-h-9': (i % 2) == 0,
                    'aspect-w-1 aspect-h-1' : (i % 2) != 0,
                    'mt-0' : i == 0, 'sm:mt-0' : i == 3 || i == 6, 'sm:block' : i > 3
                    }"
              />
            </template>
          </div>-->
        </template>
      </wrap>
      <div class="sm:px-8 mt-20">
        <div class="mx-auto max-w-7xl lg:px-8">
          <div class="relative">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-1">
              <template v-for="album in $page.props.albums" :key="album.id">
                <album :album="album" :class="{ 'sm:col-span-2' : album.cover.isPortrait == false }" />
              </template>
            </div>
          </div>
        </div>
      </div>
    </template>
  </app-layout>
</template>

<script>

import AppLayout from "@/Version1/Live/Layout/App";
import Wrap from "./Layout/Components/Wrap";
import Album from "./Components/Gallery/Album";

export default {
  name: "Gallery",

  components: { AppLayout, Wrap, Album },

  setup() {
    const sample = {
      title: 'Fujifilm Photowalk 2022',
      link: '#',
      tile: 'http://web.personal/storage/gallery/DSCF6672.JPG'
    };

    return { sample }
  }

}
</script>

<style scoped>

</style>