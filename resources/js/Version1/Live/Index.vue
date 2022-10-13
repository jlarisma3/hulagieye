<template>
  <app-layout>
    <template #content>
      <wrap>
        <template #wrap-content>
          <avatar />
          <div class="mt-9">
            <div class="max-w-2xl">
              <h1 class="text-4xl font-bold tracking-tight text-gray-800 sm:text-5xl">
                Software engineer, Street photographer, and sometimes medical doctor.
              </h1>
              <p class="mt-6 text-base text-zinc-600">
                I'm Joe, senior software engineer and amateur street photographer based in Cebu City Philippines. I give medical
                advises for I am also a graduate from University of Google College of Medicine.
              </p>
              <social class="mt-6" />
            </div>
          </div>
        </template>
      </wrap>
      <wrap class="mt-20">
        <template #wrap-content>
          <gallery />
<!--          <div class="mt-20">

          </div>-->
        </template>
      </wrap>
    </template>
  </app-layout>
</template>

<script>
import AppLayout from "@/Version1/Live/Layout/App";
import Wrap from "./Layout/Components/Wrap";
import Avatar from "./Components/Avatar";
import Social from "./Components/Social";
import Gallery from "./Components/Gallery";

export default {
  name: "Index",

  components: { AppLayout, Avatar, Wrap, Social, Gallery }
}
</script>

<style scoped>

</style>