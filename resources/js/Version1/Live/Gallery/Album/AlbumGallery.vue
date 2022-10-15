<template>
  <div class="columns-1 sm:columns-4 gap-1 space-y-1">
    <div v-for="(item, i) in $page.props.album.photos" :key="item.name"
         class="relative mt-1"
         :class="{
          'aspect-w-16 aspect-h-9': item.isPortrait == true,
          'aspect-w-1 aspect-h-1' : item.isPortrait == false,
          'mt-0' : i == 0, 'sm:mt-0' : i == 3 || i == 6, 'sm:block' : i > 3
        }">
      <img :src="item.path" class="w-full object-cover"/>
    </div>
  </div>
</template>

<script>
export default {
  name: "AlbumGallery"
}
</script>

<style scoped>

</style>