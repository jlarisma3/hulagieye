<template>
  <header>
    <div class="sm:px-8">
      <div class="mx-auto max-w-7xl lg:px-8">
        <div class="relative sm:px-8 lg:px-12">
          <div class="mx-auto max-w-2xl lg:max-w-5xl">
            <disclosure as="nav" class="bg-white dark:bg-zinc-900" v-slot="{ open }">
              <div class="flex h-16 justify-end">
                <div class="flex">

                  <div class="-ml-2 mr-2 flex items-center md:hidden">
                    <!-- Mobile menu button -->
                    <disclosure-button
                        class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-zinc-800 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-400 dark:focus:ring-gray-200">
                      <span class="sr-only">Open main menu</span>
                      <Bars3Icon v-if="!open" class="block h-6 w-6" aria-hidden="true" />
                      <XMarkIcon v-else class="block h-6 w-6" aria-hidden="true" />
                    </disclosure-button>
                  </div>

                  <div class="hidden md:ml-6 md:flex md:space-x-8">
                    <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                    <inertia-link v-for="item in $page.props.navigations" :href="item.route" :key="item.title"
                                  :class="{'border-b-2 border-gray-500 dark:border-gray-300' : item.pageName == $page.props.page_name}"
                                  class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-700 dark:text-gray-200">
                      {{ item.title }}
                    </inertia-link>
                  </div>
                </div>
              </div>

              <disclosure-panel class="md:hidden">
                <div class="space-y-1 pt-2 pb-3">
                  <disclosure-button v-for="item in $page.props.navigations" :href="item.route" :key="item.title" as="a"
                                     :class="{'border-l-4 dark:border-zinc-800 dark:bg-zinc-700 dark:border-zinc-400': item.pageName == $page.props.page_name}"
                                     class="block text-gray-700 dark:text-gray-200 py-2 pl-3 pr-4 text-sm font-medium sm:pl-5 sm:pr-6">
                    {{ item.title }}
                  </disclosure-button>
                </div>
              </disclosure-panel>
            </disclosure>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>

<script>

import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { Bars3Icon, BellIcon, XMarkIcon } from '@heroicons/vue/24/outline'
import { PlusIcon } from '@heroicons/vue/20/solid'

import Wrap from "./Wrap";
import {defineComponent, h} from "vue";

export default {
  name: "Header",

  components: {
    Wrap,
    Disclosure,
    DisclosureButton,
    DisclosurePanel,
    Bars3Icon,
    BellIcon,
    XMarkIcon,
    PlusIcon
  },
}
</script>

<style scoped>

</style>