<template>
  <app-layout>
    <template #content>
      <wrap class="mt-16 sm:mt-32">
        <template #wrap-content>
          <div class="mt-9">
            <page-header>
              <template #title>
                Street Photography, Portraits, Daily Photos, and anything in between.
              </template>
              <template #details>
                I'm Joe, senior software engineer and amateur street photographer based in Cebu City Philippines. I give medical
                advises for I am also a graduate from University of Google College of Medicine.
              </template>
            </page-header>
          </div>
        </template>
      </wrap>
      <div class="sm:px-8 mt-20">
        <div class="mx-auto max-w-7xl lg:px-8">
          <div class="relative">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-1">
              <template v-for="(album, i) in $page.props.albums" :key="album.id">
                <album :album="album" :class="{ 'sm:col-span-2' : album.cover.isPortrait == true && i < 4}" />
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
import Wrap from "../Layout/Components/Wrap";
import Album from "./Components/Album";
import PageHeader from "../Components/PageHeader";

export default {
  name: "Gallery",

  components: { AppLayout, Wrap, Album, PageHeader }
}
</script>

<style scoped>

</style>