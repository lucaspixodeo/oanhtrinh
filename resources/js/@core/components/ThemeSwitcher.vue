<script setup>
import { useTheme } from 'vuetify'

const props = defineProps({
  themes: {
    type: Array,
    required: true,
  },
})

const {
  name: themeName,
  global: globalTheme,
} = useTheme()

globalTheme.name.value = localStorage.getItem('theme') || themeName.value

const {
  state: currentThemeName,
  next: getNextThemeName,
  index: currentThemeIndex,
} = useCycleList(props.themes.map(t => t.name), { initialValue: globalTheme.name.value })

const changeTheme = () => {
  globalTheme.name.value = getNextThemeName()
  localStorage.setItem('theme', globalTheme.name.value)
}

// Update icon if theme is changed from other sources
watch(() => globalTheme.name.value, val => {
  currentThemeName.value = val
})
</script>

<template>
  <IconBtn @click="changeTheme">
    <VIcon :icon="props.themes[currentThemeIndex].icon" />
    <VTooltip
      activator="parent"
      open-delay="1000"
      scroll-strategy="close"
    >
      <span class="text-capitalize">{{ currentThemeName }}</span>
    </VTooltip>
  </IconBtn>
</template>
