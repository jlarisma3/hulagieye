<template>
  <app-layout>
    <template #content>
      <wrap>
        <template #wrap-content>
          <avatar />
          <div class="mt-9">
            <page-header>
              <template #title>
                Software engineer, Street photographer, and a frustrated culinarian.
              </template>
              <template #details>
                I'm Joe, senior software engineer and amateur street photographer based in Cebu City Philippines. I give medical
                advises for I am also a graduate from University of Google College of Medicine.
              </template>
            </page-header>
            <social class="mt-6" />
          </div>
        </template>
      </wrap>
      <div class="sm:px-8 mt-20">
        <div class="mx-auto max-w-7xl lg:px-8">
<!--          <div class="relative">
            <gallery />
          </div>-->
        </div>
      </div>
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

export default {
  name: "Index",

  components: { AppLayout, Avatar, Wrap, Social, Gallery, PageHeader }
}
</script>

<style scoped>

</style>