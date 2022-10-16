<template>
  <app-layout>
    <template #content>
      <wrap class="mt-16 sm:mt-32">
        <template #wrap-content>
          <div class="grid grid-cols-1 gap-y-16 lg:grid-cols-2 lg:grid-rows-[auto_1fr] lg:gap-y-12">
            <div class="lg:pl-20">
              <div class="max-w-none lg:max-w-none opacity-90 sm:max-w-xs">
                <img :src="$page.props.bio_pic.path"
                     class="aspect-square rounded-2xl bg-gray-100 dark:bg-zinc-900 object-cover"
                     width="800"
                     height="800"
                />
              </div>
            </div>
            <div class="lg:order-first lg:row-span-2">
              <page-header>
                <template #title>
                  I'm Joe Larisma. A proud lumad from Cebu City.
                </template>
                <template #details>
                  I'm Joe, senior software engineer and amateur street photographer based in Cebu City Philippines. I give medical
                  advises for I am also a graduate from University of Google College of Medicine.

                  <br><br>

                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas maximus commodo elit, fringilla consequat
                  felis elementum quis. Suspendisse pulvinar tempor nisl, ut vestibulum arcu iaculis eget. In volutpat nibh eget
                  purus placerat molestie. Cras at ultrices erat. Proin quam arcu, gravida vitae vulputate quis, lacinia in lorem.
                  Donec mi ante, vulputate sed diam a, vulputate porttitor sapien. Cras ultrices magna est. Nullam eget justo facilisis,
                  sodales arcu ac, dictum dui. Praesent rhoncus velit sit amet felis convallis, in tincidunt nisi rutrum. Donec quis est
                  et orci accumsan varius. Fusce gravida condimentum feugiat. Sed a aliquet nisl, sed ultrices eros. Praesent quis feugiat
                  metus. Pellentesque ullamcorper gravida lorem vestibulum faucibus. Curabitur at metus id ipsum commodo semper in eu ex.
                  Sed tempor ac nulla sit amet dictum.

                  <br><br>

                  Praesent sed mattis risus. Sed sodales tristique nibh, eget viverra augue bibendum id. Sed in volutpat ante. Quisque
                  non risus volutpat, molestie elit vitae, mollis est. Phasellus sit amet purus arcu. Vestibulum ante ipsum primis in
                  faucibus orci luctus et ultrices posuere cubilia curae; Morbi ornare mi sollicitudin nibh mollis rhoncus. Mauris
                  pretium fringilla finibus. Vestibulum elementum at odio at egestas. Phasellus ipsum elit, bibendum bibendum euismod
                  sed, venenatis a erat. Nulla non ultrices elit. Suspendisse tincidunt sagittis nibh, at elementum metus tempus quis.
                  Maecenas ut dolor rhoncus, dictum purus et, egestas ex.
                </template>
              </page-header>
            </div>
            <div class="lg:pl-20">
              <ul role="list">
                <li v-for="(item, i) in social" :key="item.name" :class="{'mt-4' : i != 0, 'mt-8 border-t border-gray-100 pt-8 dark:border-zinc-300/20' : item.name == 'Email'}" class="flex">
                  <a :href="item.href"
                     class="group flex text-sm font-medium text-gray-600 transition hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                    <component :is="item.icon" class="h-6 w-6" aria-hidden="true" />
                    <span v-if="item.name != 'Email'" class="ml-4">Follow me on {{ item.name }}</span>
                    <span v-else class="ml-4">{{ item.href.replace('mailto:', '') }}</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </template>
      </wrap>
    </template>
  </app-layout>
</template>

<script>

import AppLayout from "@/Version1/Live/Layout/App";
import Wrap from "./Layout/Components/Wrap";
import Social from "./Components/Social";
import PageHeader from "./Components/PageHeader";

export default {
  name: "Bio",

  components: { AppLayout, Wrap, Social, PageHeader },

  computed: {
    social() {
      return this.socialObject();
    }
  }
}
</script>

<style scoped>

</style>