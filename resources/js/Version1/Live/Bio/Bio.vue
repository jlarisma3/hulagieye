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
                  A Web Engineer with {{ (new Date).getFullYear() - 2009 }} years of experience specializes in
                  {{ getSkills }}.

                  <!-- skill rates -->
                  <div class="mt-6">
                    <h3 class="flex font-medium tracking-tight text-gray-800 dark:text-gray-100 mb-6">
                      <cog6-tooth-icon class="w-6 h-6"/><span class="ml-3">Skill Rating</span>
                    </h3>
                    <template v-for="(rate, i) in rates">
                      <progress-bar
                          :config="rate"
                          class="mb-3"
                      />
                    </template>
                  </div>
                  <!-- work exp -->
                  <div class="mt-6">
                    <h3 class="flex font-medium tracking-tight text-gray-800 dark:text-gray-100 mb-6">
                      <briefcase-icon class="w-6 h-6" /> <span class="ml-3">Work Experience</span>
                    </h3>
                    <ol class="mt-6 space-y-4">
                      <li v-for="(item, i) in work" :key="item.name" class="flex gap-4">
                        <div class="
                          relative
                          mt-1 flex h-10 w-10
                          flex-none items-center
                          justify-center rounded-full
                          shadow-md shadow-zinc-800/5
                          ring-1 ring-zinc-900/5 dark:border
                          dark:border-zinc-700/50
                          dark:bg-zinc-800 dark:ring-0"
                        >
                        </div>
                        <dl class="flex flex-auto flex-wrap gap-x-2">
                          <dt class="sr-only">Company</dt>
                          <dd class="w-full flex-none text-sm font-medium text-zinc-900 dark:text-zinc-100">
                            {{ item.name }}
                          </dd>
                          <dt class="sr-only">Role</dt>
                          <dd class="text-xs text-zinc-500 dark:text-zinc-400">
                            {{ item.position }}
                          </dd>
                          <dt class="sr-only">Date</dt>
                          <dd class="ml-auto text-xs text-zinc-400 dark:text-zinc-500">
                            {{ item.years }}
                          </dd>
                        </dl>
                      </li>
                    </ol>
                  </div>
                  <!-- photographer -->
<!--                  <div class="mt-20">
                    <i>As a street photographer ...</i>
                    <p class="my-6">
                      It all started with taking good photos with my sneaker collection until I got inspired with the photos
                    took by some of my friends who are also in to photography. <br><br>But lately, it has been more of a therapy.
                      I always get lost in thoughts when I start shooting.
                      <br><br>
                      I haven't been so passionate when it comes to a hobby but this is one thing that I really want to be
                      good at.
                    </p>
                    <inertia-link :href="route('gallery')">
                      <i>Visit my gallery for my photos ...</i>
                    </inertia-link>
                  </div>-->
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
import Wrap from "../Layout/Components/Wrap";
import Social from "../Components/Social";
import PageHeader from "../Components/PageHeader";
import { ChevronDoubleRightIcon, BriefcaseIcon, Cog6ToothIcon } from "@heroicons/vue/24/solid";
import ProgressBar from "../Components/ProgressBar";

export default {
  name: "Bio",

  components: {
    AppLayout,
    Wrap,
    Social,
    PageHeader,
    ChevronDoubleRightIcon,
    ProgressBar,
    BriefcaseIcon,
    Cog6ToothIcon
  },

  computed: {
    social() {
      return this.socialObject();
    },

    getSkills() {
      return this.skills.join(', ');
    }
  },

  setup() {
    const skills = [
      'Front-end',
      'Back-end',
      'Database Design',
      'Server Administration',
      'Project Management',
      'API Development',
      'Web Deployment',
      'Project Delivery'
    ];

    const rates = [
      {
        label: "HTML / CSS / TailwindCSS / Boostrap",
        score: 9
      },
      /*{
        label: "CSS",
        score: 8
      },*/
      {
        label: "Javascript / VueJs / ReactJs",
        score: 9
      },
      {
        label: "PHP / Laravel / Yii / Symfony",
        score: 9
      },
      {
        label: "MySQL / MariaDB / PostgreSql",
        score: 9
      },
      {
        label: "Linux System",
        score: 7
      },
      /*{
        label: "Laravel Framework",
        score: 9
      },
      {
        label: "TailwindCSS",
        score: 8
      },
      {
        label: "VueJs",
        score: 9
      },
      {
        label: "Vagrant",
        score: 9
      },
      {
        label: "Docker",
        score: 6
      },
      {
        label: "ReactJS",
        score: 6
      },
      {
        label: "Flutter",
        score: 5
      }*/
    ];

    const work = [
      {
        name: "Codev Phils.",
        position: "Senior Web Engineer",
        years: "2017 - present"
      },
      {
        name: "Odusee Philippines Inc.",
        position: "Project Manager",
        years: "2013 - 2017"
      },
      {
        name: "Odusee Philippines Inc.",
        position: "Web Team Lead",
        years: "2011 - 2013"
      },
      {
        name: "A5trx",
        position: "Javascript Developer",
        years: "2009 - 2011"
      }
    ];

    return {
      skills,
      rates,
      work
    }
  }
}
</script>

<style scoped>

</style>