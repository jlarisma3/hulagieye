<template>
  <app-layout>
    <template #content>
      <wrap class="mt-16 sm:mt-32">
        <template #wrap-content>
          <div class="mt-9">
            <div class="max-w-2xl">
              <h1 class="text-4xl font-bold tracking-tight text-gray-800 sm:text-5xl">
                {{ $page.props.album.title }}
              </h1>
              <p class="mt-6 text-base text-zinc-600">
                {{ $page.props.album.shortDescription }}
              </p>
            </div>
          </div>
        </template>
      </wrap>

      <!-- album gallery -->
      <div class="sm:px-8 mt-20">
        <div class="mx-auto max-w-7xl lg:px-8">
          <div class="relative">
            <album-gallery />
          </div>
        </div>
      </div>
    </template>
  </app-layout>
</template>

<script>

import AppLayout from "@/Version1/Live/Layout/App";
import Wrap from "../Layout/Components/Wrap";
import AlbumGallery from "./Album/AlbumGallery";

export default {
  name: "Album",

  components: { AppLayout, Wrap, AlbumGallery }
}
</script>

<style scoped>

</style>