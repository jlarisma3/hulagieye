<template>
  <app-layout>
    <template #content>
      <wrap>
        <template #wrap-content>
          <avatar />
          <page-header class="mt-10">
            <template #title>
              Web engineer, street photographer, and a frustrated culinarian.
            </template>
            <template #details>
              I'm Joe, Senior Web Engineer and an smateur Street Photographer based in Cebu City Philippines.
            </template>
          </page-header>
          <social class="mt-6" />
        </template>
      </wrap>
      <wrap class="mt-10">
        <template #wrap-content>
          <service />
        </template>
      </wrap>
    </template>
  </app-layout>
</template>

<script>
import AppLayout from "@/Version1/Live/Layout/App";
import Wrap from "../Layout/Components/Wrap";
import Avatar from "./Components/Avatar";
import Social from "../Components/Social";
import Gallery from "../Components/Gallery";
import PageHeader from "../Components/PageHeader";
import Service from "./Components/Service";

export default {
  name: "Index",

  components: { AppLayout, Avatar, Wrap, Social, Gallery, PageHeader, Service }
}
</script>

<style scoped>

</style>