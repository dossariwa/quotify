<template>
  <footer class="bg-white">
    <div class="mx-auto max-w-7xl overflow-hidden px-6 py-20 sm:py-24 lg:px-8">
      <p class="mt-10 text-center text-xs leading-5 text-gray-500">
        &copy; 2023 Quotify, Inc. All rights reserved.
      </p>
    </div>
  </footer>
  <slot />
</template>

<script>
import NavbarLink from "@/Shared/NavbarLink.vue";

export default {
  components: { NavbarLink },
};
</script>
