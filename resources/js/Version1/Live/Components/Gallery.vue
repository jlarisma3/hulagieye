<template>
  <div class="bg-white">
    <div class="gap-3 columns-1 lg:columns-4 md:columns-2 space-y-3">
      <div v-for="item in $page.props.images" :key="item.name" class="break-inside-avoid">
        <img :src="item.path" />
      </div>
    </div>
  </div>
</template>

<script>

</script>