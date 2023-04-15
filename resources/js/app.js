import { createApp, h } from "vue";
import { Head, createInertiaApp } from "@inertiajs/vue3";
import { InertiaProgress } from "@inertiajs/progress";
import Layout from "@/Shared/Layout.vue";

InertiaProgress.init({
  progress: {
    // The delay after which the progress bar will appear
    // during navigation, in milliseconds.
    delay: 0,

    // The color of the progress bar.
    color: "#29d",

    // Whether to include the default NProgress styles.
    includeCSS: true,

    // Whether the NProgress spinner will be shown.
    showSpinner: false,
  },
});

createInertiaApp({
  resolve: (name) => {
    const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
    let page = pages[`./Pages/${name}.vue`];
    page.default.layout = page.default.layout || Layout;
    return page;
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .component("Head", Head)
      .mount(el, "#app");
  },

  title: (title) => `Quotify - ${title}`,
});
