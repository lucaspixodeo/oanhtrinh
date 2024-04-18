<script setup>
import { useTheme } from 'vuetify'
import logo from '@images/logo.jpg'
import authV1MaskDark from '@images/pages/auth-v1-mask-dark.png'
import authV1MaskLight from '@images/pages/auth-v1-mask-light.png'
import authV1Tree2 from '@images/pages/auth-v1-tree-2.png'
import authV1Tree from '@images/pages/auth-v1-tree.png'
import { login, checkAuth } from '../auth'
import { useRouter } from 'vue-router'

const router = useRouter()

onBeforeMount(() => {
  if (checkAuth()) {
    router.push('/')
  }
})

const form = ref({
  username: '',
  password: '',
  error: '',
})

const vuetifyTheme = useTheme()

const authThemeMask = computed(() => {
  return vuetifyTheme.global.name.value === 'light' ? authV1MaskLight : authV1MaskDark
})

const isLoggingIn = ref(false);

const isPasswordVisible = ref(false)

const handleLogin = async () => {
  try {
    isLoggingIn.value = true
    form.value.error = ''

    await login({ username: form.value.username, password: form.value.password })

    // Redirect to dashboard or any other route upon successful login
    router.push('/')
  } catch (error) {
    // Handle login error
    isLoggingIn.value = false
    form.value.error = error.message
  }
}
</script>

<template>
  <!-- eslint-disable vue/no-v-html -->

  <div class="auth-wrapper d-flex align-center justify-center pa-4">
    <VCard
      class="auth-card pa-4 pt-7"
      max-width="448"
    >
      <VCardItem class="justify-center mb-5">
        <template #prepend>
          <div class="d-flex logo">
            <img :src="logo">
          </div>
        </template>

        <VCardTitle class="font-weight-semibold text-2xl text-uppercase">
          CỔ PHỤC OANH TRỊNH
        </VCardTitle>
      </VCardItem>

      <VCardText>
        <VForm @submit.prevent="handleLogin">
          <VRow>

            <VAlert v-if="form.error" type="error" class="mb-5">{{ form.error }}</VAlert>

            <!-- email -->
            <VCol cols="12">
              <VTextField
                v-model="form.username"
                label="Tên đăng nhập"
                type="text"
              />
            </VCol>

            <!-- password -->
            <VCol cols="12">
              <VTextField
                v-model="form.password"
                label="Mật khẩu"
                placeholder="············"
                :type="isPasswordVisible ? 'text' : 'password'"
                :append-inner-icon="isPasswordVisible ? 'ri-eye-off-line' : 'ri-eye-line'"
                @click:append-inner="isPasswordVisible = !isPasswordVisible"
                class="mb-10"
              />

              <p v-if="isLoggingIn" class="text-center">
                <VProgressCircular color="primary" indeterminate></VProgressCircular>
              </p>

              <!-- login button -->
              <VBtn
                block
                type="submit"
                :disabled="isLoggingIn"
              >
                Đăng nhập
              </VBtn>

            </VCol>
          </VRow>
        </VForm>
      </VCardText>
    </VCard>

    <VImg
      class="auth-footer-start-tree d-none d-md-block"
      :src="authV1Tree"
      :width="250"
    />

    <VImg
      :src="authV1Tree2"
      class="auth-footer-end-tree d-none d-md-block"
      :width="350"
    />

    <!-- bg img -->
    <VImg
      class="auth-footer-mask d-none d-md-block"
      :src="authThemeMask"
    />
  </div>
</template>

<style lang="scss">
@use "@core-scss/pages/page-auth.scss";
</style>
