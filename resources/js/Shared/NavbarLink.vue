<template>
  <Link
    class="text-sm font-semibold leading-6 text-gray-900"
    :class="{ 'rounded-md bg-gray-100 px-2 py-2': active }"
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
