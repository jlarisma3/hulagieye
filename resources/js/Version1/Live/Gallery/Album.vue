<template>
  <app-layout>
    <template #content>
      <wrap class="mt-16 sm:mt-32">
        <template #wrap-content>
          <div class="mt-9">
            <page-header>
              <template #title>
                {{ $page.props.album.title }}
              </template>
              <template #details>
                {{ $page.props.album.shortDescription }}
              </template>
            </page-header>
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
import PageHeader from "../Components/PageHeader";

export default {
  name: "Album",

  components: { AppLayout, Wrap, AlbumGallery, PageHeader }
}
</script>

<style scoped>

</style>