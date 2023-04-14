<template>
  <Layout>
    <Focus />
    <Footer />
  </Layout>
</template>

<script>
import Layout from "@/Shared/Layout.vue";
import Focus from "@/Pages/Focus.vue";
import Footer from "@/Shared/Footer.vue";

export default {
  components: { Layout, Focus, Footer },
};
</script>
