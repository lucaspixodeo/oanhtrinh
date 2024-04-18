<script setup>
const name = ref('')
const description = ref('')
const errors = ref(null)

const handleSubmit = async () => {
  try {
    const token = localStorage.getItem('token')

    const response = await fetch('/api/category/create', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        Authorization: `Bearer ${token}`,
      },
      body: JSON.stringify({
        name: name.value,
        description: description.value,
      }),
    })

    if (!response.ok) {
      const errorData = await response.json()

      errors.value = Object.assign({}, errorData.errors)
      throw new Error(errorData.message || 'Create category failed')
    }

    resetForm()

  } catch (error) {
    console.error('Create category failed:', error)
  }
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
