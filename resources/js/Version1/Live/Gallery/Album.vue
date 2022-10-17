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
      <wrap class="mt-20">
        <template #wrap-content>
          <album-gallery />
        </template>
      </wrap>
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