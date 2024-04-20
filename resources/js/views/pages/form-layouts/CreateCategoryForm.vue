<script setup>
import { runAjax } from '@/helpers'
import { useToast } from 'vue-toast-notification'
import 'vue-toast-notification/dist/theme-sugar.css'

const $toast = useToast()
const name = ref('')
const description = ref('')
const errors = ref(null)

const handleSubmit = async () => {
  runAjax('/api/category/create', 'POST', {
    name: name.value,
    description: description.value,
  })
    .then(() => {
      resetForm()
      $toast.success('Thêm loại thành công!')
    })
    .catch(response => {
      errors.value = Object.assign({}, response.errors)
    })
}

const resetForm = () => {
  name.value = ''
  description.value = ''
  errors.value = null
}
</script>

<template>
  <VForm @submit.prevent="handleSubmit">
    <VRow>
      <VCol cols="12">
        <VTextField
          v-model="name"
          label="Tên loại"
          :error-messages="errors?.name"
        />
      </VCol>

      <VCol cols="12">
        <VTextarea
          v-model="description"
          label="Mô tả"
        />
      </VCol>

      <VCol
        cols="12"
        class="d-flex gap-4"
      >
        <VBtn type="submit">
          Lưu
        </VBtn>

        <VBtn
          type="reset"
          color="secondary"
          variant="outlined"
        >
          Xóa
        </VBtn>
      </VCol>
    </VRow>
  </VForm>
</template>
