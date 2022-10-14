<template>
  <div class="bg-white">
    <div class="relative columns-1 sm:columns-3 gap-3">
      <div v-for="(item, i) in $page.props.images" :key="item.name"
           class="relative mt-3"
           :class="{
        'aspect-w-16 aspect-h-9': item.isPortrait == true,
        'aspect-w-1 aspect-h-1' : item.isPortrait == false,
        'mt-0' : i == 0, 'sm:mt-0' : i == 3 || i == 6, 'sm:block' : i > 3
      }">
        <img :src="item.path" class="w-full object-cover"/>
      </div>
    </div>
  </div>
</template>

<script>

</script>