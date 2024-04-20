<script setup>
import ProductTables from '@/views/pages/tables/ProductTables.vue'
import { runAjax } from "@/helpers"

const data = ref([])

const fetchData = async () => {
  runAjax('/api/category/list')
    .then(response => {
      data.value = Object.assign([], response.data)
    })
    .catch(response => {
      console.log(response)
    })
}

onBeforeMount(() => {
  fetchData()
})
</script>

<template>
  <VRow>
    <VCol cols="12">
      <VCard title="Tất cả sản phẩm" >
        <ProductTables :data="data" />
      </VCard>
    </VCol>
  </VRow>
</template>
