<script setup>
import VerticalNavSectionTitle from '@/@layouts/components/VerticalNavSectionTitle.vue'
import VerticalNavGroup from '@layouts/components/VerticalNavGroup.vue'
import VerticalNavLink from '@layouts/components/VerticalNavLink.vue'
</script>

<template>
  <VerticalNavLink
    :item="{
      title: 'Thống kê',
      icon: 'ri-home-smile-line',
      to: '/',
    }"
  />

  <VerticalNavSectionTitle
    :item="{
      heading: 'Kinh doanh',
    }"
  />

  <VerticalNavGroup
    :item="{
      title: 'Sản phẩm',
      icon: 'ri-shirt-line',
    }"
  >
    <VerticalNavLink
      :item="{
        title: 'Thêm sản phẩm',
        icon: 'ri-add-circle-line',
        to: '/product/add',
      }"
    />
    <VerticalNavLink
      :item="{
        title: 'Tất cả sản phẩm',
        icon: 'ri-file-list-3-line',
        to: '/product/list',
      }"
    />
  </VerticalNavGroup>

  <VerticalNavGroup
    :item="{
      title: 'Phân loại',
      icon: 'ri-mist-line',
    }"
  >
    <VerticalNavLink
      :item="{
        title: 'Thêm loại',
        icon: 'ri-add-circle-line',
        to: '/category/add',
      }"
    />
    <VerticalNavLink
      :item="{
        title: 'Tất cả các loại',
        icon: 'ri-file-list-3-line',
        to: '/category/list',
      }"
    />
  </VerticalNavGroup>

  <VerticalNavGroup
    :item="{
      title: 'Đơn hàng',
      icon: 'ri-shopping-cart-line',
    }"
  >
    <VerticalNavLink
      :item="{
        title: 'Tạo đơn',
        icon: 'ri-add-circle-line',
        to: '/order/add',
      }"
    />
    <VerticalNavLink
      :item="{
        title: 'Tất cả đơn',
        icon: 'ri-file-list-3-line',
        to: '/order/list',
      }"
    />
  </VerticalNavGroup>

  <VerticalNavSectionTitle
    :item="{
      heading: 'Quản lý',
    }"
  />

  <VerticalNavGroup
    :item="{
      title: 'Nhân viên',
      icon: 'ri-user-line',
    }"
  >
    <VerticalNavLink
      :item="{
        title: 'Thêm nhân viên',
        icon: 'ri-user-add-line',
      }"
    />
    <VerticalNavLink
      :item="{
        title: 'Tất cả nhân viên',
        icon: 'ri-file-list-3-line',
      }"
    />
  </VerticalNavGroup>

  <VerticalNavGroup
    :item="{
      title: 'Ca làm việc',
      icon: 'ri-time-line',
    }"
  >
    <VerticalNavLink
      :item="{
        title: 'Thống kê ca NViên',
        icon: 'ri-line-chart-line',
      }"
    />
    <VerticalNavLink
      :item="{
        title: 'Tính lương NViên',
        icon: 'ri-money-dollar-circle-line',
      }"
    />
  </VerticalNavGroup>

  <VerticalNavGroup
    :item="{
      title: 'Thu chi',
      icon: 'ri-refund-2-line',
    }"
  >
    <VerticalNavLink
      :item="{
        title: 'Thêm khoản chi',
        icon: 'ri-add-circle-line',
      }"
    />
  </VerticalNavGroup>

  <!-- 👉 User Interface -->
  <VerticalNavSectionTitle
    :item="{
      heading: 'User Interface',
    }"
  />
  <VerticalNavLink
    :item="{
      title: 'Typography',
      icon: 'ri-text',
      to: '/typography',
    }"
  />
  <VerticalNavLink
    :item="{
      title: 'Icons',
      icon: 'ri-remixicon-line',
      to: '/icons',
    }"
  />
  <VerticalNavLink
    :item="{
      title: 'Cards',
      icon: 'ri-bar-chart-box-line',
      to: '/cards',
    }"
  />

  <!-- 👉 Forms & Tables -->
  <VerticalNavSectionTitle
    :item="{
      heading: 'Forms & Tables',
    }"
  />
  <VerticalNavLink
    :item="{
      title: 'Form Layouts',
      icon: 'ri-layout-4-line',
      to: '/form-layouts',
    }"
  />
  <VerticalNavLink
    :item="{
      title: 'Form Validation',
      icon: 'ri-checkbox-multiple-line',
      href: 'https://demos.themeselection.com/materio-vuetify-vuejs-laravel-admin-template/demo-1/forms/form-validation',
      target: '_blank',
      badgeContent: 'Pro',
      badgeClass: 'bg-light-primary text-primary',
    }"
  />
  <VerticalNavLink
    :item="{
      title: 'Form Wizard',
      icon: 'ri-git-commit-line',
      href: 'https://demos.themeselection.com/materio-vuetify-vuejs-laravel-admin-template/demo-1/forms/form-wizard-numbered',
      target: '_blank',
      badgeContent: 'Pro',
      badgeClass: 'bg-light-primary text-primary',
    }"
  />
  <VerticalNavLink
    :item="{
      title: 'Tables',
      icon: 'ri-table-alt-line',
      to: '/tables',
    }"
  />

  <!-- 👉 Others -->
  <VerticalNavSectionTitle
    :item="{
      heading: 'Others',
    }"
  />
  <VerticalNavLink
    :item="{
      title: 'Access Control',
      icon: 'ri-shield-line',
      href: 'https://demos.themeselection.com/materio-vuetify-vuejs-laravel-admin-template/demo-1/access-control',
      target: '_blank',
      badgeContent: 'Pro',
      badgeClass: 'bg-light-primary text-primary',
    }"
  />
  <VerticalNavLink
    :item="{
      title: 'Documentation',
      icon: 'ri-article-line',
      href: 'https://demos.themeselection.com/materio-vuetify-vuejs-admin-template/documentation/guide/laravel-integration/folder-structure.html',
      target: '_blank',
    }"
  />
  <VerticalNavLink
    :item="{
      title: 'Raise Support',
      href: 'https://github.com/themeselection/materio-vuetify-vuejs-laravel-admin-template-free/issues',
      icon: 'ri-lifebuoy-line',
      target: '_blank',
    }"
  />
</template>
