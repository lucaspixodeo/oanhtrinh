<script setup>
import CreateCategoryForm from "@/views/pages/form-layouts/CreateCategoryForm.vue"
</script>

<template>
  <div>
    <VRow>
      <VCol cols="12">
        <VCard title="Thêm loại">
          <VCardText>
            <CreateCategoryForm />
          </VCardText>
        </VCard>
      </VCol>
    </VRow>
  </div>
</template>
