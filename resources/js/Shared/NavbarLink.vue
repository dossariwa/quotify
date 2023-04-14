<template>
  <Link
    class="text-gray-800"
    :class="{
      'bg-gray-50 text-teal-600 active:text-teal-600 focus:text-teal-600 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold hover:text-teal-600 group-hover:text-teal-600':
        active,
    }"
  >
    <slot />
  </Link>
</template>

<script>
import { Link } from "@inertiajs/vue3";
export default {
  components: { Link },
  props: {
    active: Boolean,
  },
};
</script>
