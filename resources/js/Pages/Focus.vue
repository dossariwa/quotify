<template>
  <div class="pb-2 sm:flex sm:items-center sm:justify-between mb-2">
    <h3 class="font-bold text-2xl leading-6 text-gray-900">Focus</h3>
    <div class="mt-3 sm:ml-4 sm:mt-0">
      <button
        type="button"
        class="inline-flex items-center rounded-md bg-teal-800 px-3 py-2 text-sm font-semibold text-white hover:bg-teal-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
      >
        View all
      </button>
    </div>
  </div>
  <div class="border-b border-gray-200">
    <swiper
      class="swiper-container mb-4"
      :slides-per-view="6"
      :space-between="50"
      :breakpoints="{
        640: { slidesPerView: 3 },
        768: { slidesPerView: 4 },
        1024: { slidesPerView: 5 },
      }"
      @swiper="onSwiper"
      @slideChange="onSlideChange"
    >
      <swiper-slide>
        <div class="max-w-sm rounded overflow-hidden cursor-pointer">
          <div class="realtive">
            <div
              class="h-48 w-42 rounded-lg transition hover:scale-105 hover:rotate-1"
              style="
                background-image: url(https://images.unsplash.com/photo-1581490152474-e63c1ad2fa75?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8cHN5Y2hvbG9neSUzQnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60);
                background-size: cover;
                background-position: center;
              "
            ></div>
            <span>
              <img
                class="w-10 h-10 rounded-full absolute top-0 left-0"
                src="../../../public/images/quoteify.png"
                alt="Quotify"
              />
            </span>
            <span
              class="ml-1 drop-shadow-md [text-shadow:_0_1px_0_rgb(0_0_0_/_40%)] font-bold text-white text-shadow text-xl absolute bottom-0 left-0 mb-2"
            >
              Psychology
            </span>
          </div>
        </div>
      </swiper-slide>

      <swiper-slide>
        <div class="max-w-sm rounded overflow-hidden cursor-pointer">
          <div class="realtive">
            <div
              class="h-48 w-42 rounded-lg transition hover:scale-105 hover:rotate-1"
              style="
                background-size: cover;
                background-position: center;
                background-image: url(https://images.unsplash.com/photo-1491438590914-bc09fcaaf77a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8U29jaWFsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60);
              "
            ></div>
            <span>
              <img
                class="w-10 h-10 rounded-full absolute top-0 left-0"
                src="../../../public/images/quoteify.png"
                alt="Quotify"
              />
            </span>
            <span
              class="ml-1 drop-shadow-md [text-shadow:_0_1px_0_rgb(0_0_0_/_40%)] font-bold text-white text-xl absolute bottom-0 left-0 mb-2"
              >Sociology</span
            >
          </div>
        </div>
      </swiper-slide>

      <swiper-slide>
        <div class="max-w-sm rounded overflow-hidden cursor-pointer">
          <div class="realtive">
            <div
              class="h-48 w-42 rounded-lg transition hover:scale-105 hover:rotate-1"
              style="
                background-size: cover;
                background-position: center;
                background-image: url(https://images.unsplash.com/photo-1620662831351-9f68f76d0b9a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8UGhpbG9zb3BoeXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60);
              "
            ></div>
            <span>
              <img
                class="w-10 h-10 rounded-full absolute top-0 left-0"
                src="../../../public/images/quoteify.png"
                alt="Quotify"
              />
            </span>
            <span
              class="ml-1 drop-shadow-md [text-shadow:_0_1px_0_rgb(0_0_0_/_40%)] font-bold text-white text-xl absolute bottom-0 left-0 mb-2"
              >Philosophy</span
            >
          </div>
        </div>
      </swiper-slide>

      <swiper-slide>
        <div class="max-w-sm rounded overflow-hidden cursor-pointer">
          <div class="realtive">
            <div
              class="h-48 w-42 rounded-lg transition hover:scale-105 hover:rotate-1"
              style="
                background-size: cover;
                background-position: center;
                background-image: url(https://images.unsplash.com/photo-1602878741708-0c52aa4cd217?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8QW50aHJvcG9sb2d5fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60);
              "
            ></div>
            <span>
              <img
                class="w-10 h-10 rounded-full absolute top-0 left-0"
                src="../../../public/images/quoteify.png"
                alt="Quotify"
              />
            </span>
            <span
              class="ml-1 drop-shadow-md [text-shadow:_0_1px_0_rgb(0_0_0_/_40%)] font-bold text-white text-xl absolute bottom-0 left-0 mb-2"
              >Anthropology</span
            >
          </div>
        </div>
      </swiper-slide>

      <swiper-slide>
        <div class="max-w-sm rounded overflow-hidden cursor-pointer">
          <div class="realtive">
            <div
              class="h-48 w-42 rounded-lg transition hover:scale-105 hover:rotate-1"
              style="
                background-size: cover;
                background-position: center;
                background-image: url(https://media.istockphoto.com/id/1363029139/photo/currency-and-exchange-stock-chart-for-finance-and-economy-display.jpg?b=1&s=170667a&w=0&k=20&c=Uc2GI-So_GbIztfoG2vcin-zcmGEX503vTVSGbJAKfY=);
              "
            ></div>
            <span>
              <img
                class="w-10 h-10 rounded-full absolute top-0 left-0"
                src="../../../public/images/quoteify.png"
                alt="Quotify"
              />
            </span>
            <span
              class="ml-1 drop-shadow-md [text-shadow:_0_1px_0_rgb(0_0_0_/_40%)] font-bold text-white text-xl absolute bottom-0 left-0 mb-2"
              >Economics</span
            >
          </div>
        </div>
      </swiper-slide>

      <swiper-slide>
        <div class="max-w-sm rounded overflow-hidden cursor-pointer">
          <div class="realtive">
            <div
              class="h-48 w-42 rounded-lg transition hover:scale-105 hover:rotate-1"
              style="
                background-size: cover;
                background-position: center;
                background-image: url(https://images.unsplash.com/photo-1591622180684-b96c52ef3908?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fFBvbGl0aWNhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60);
              "
            ></div>
            <span>
              <img
                class="w-10 h-10 rounded-full absolute top-0 left-0"
                src="../../../public/images/quoteify.png"
                alt="Quotify"
              />
            </span>
            <span
              class="ml-1 drop-shadow-md [text-shadow:_0_1px_0_rgb(0_0_0_/_40%)] font-bold text-white text-xl absolute bottom-0 left-0 mb-2"
              >Political</span
            >
          </div>
        </div>
      </swiper-slide>

      <swiper-slide>
        <div class="max-w-sm rounded overflow-hidden cursor-pointer">
          <div class="realtive">
            <div
              class="h-48 w-42 rounded-lg transition hover:scale-105 hover:rotate-1"
              style="
                background-size: cover;
                background-position: center;
                background-image: url(https://images.unsplash.com/photo-1505664194779-8beaceb93744?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8TGF3fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60);
              "
            ></div>
            <span>
              <img
                class="w-10 h-10 rounded-full absolute top-0 left-0"
                src="../../../public/images/quoteify.png"
                alt="Quotify"
              />
            </span>
            <span
              class="ml-1 drop-shadow-md [text-shadow:_0_1px_0_rgb(0_0_0_/_40%)] font-bold text-white text-xl absolute bottom-0 left-0 mb-2"
              >History</span
            >
          </div>
        </div>
      </swiper-slide>

      <swiper-slide>
        <div class="max-w-sm rounded overflow-hidden cursor-pointer">
          <div class="realtive">
            <div
              class="h-48 w-42 rounded-lg transition hover:scale-105 hover:rotate-1"
              style="
                background-size: cover;
                background-position: center;
                background-image: url(https://media.istockphoto.com/id/1347959757/photo/magnifying-glass-on-stack-of-documents.jpg?b=1&s=170667a&w=0&k=20&c=cm-wfwl9BUtAQkyU3f5-ijJ2WVZPtHroJP_2nJAD2QM=);
              "
            ></div>
            <span>
              <img
                class="w-10 h-10 rounded-full absolute top-0 left-0"
                src="../../../public/images/quoteify.png"
                alt="Quotify"
              />
            </span>
            <span
              class="ml-1 drop-shadow-md [text-shadow:_0_1px_0_rgb(0_0_0_/_40%)] font-bold text-white text-xl absolute bottom-0 left-0 mb-2"
              >Law</span
            >
          </div>
        </div>
      </swiper-slide>

      <swiper-slide>
        <div class="max-w-sm rounded overflow-hidden cursor-pointer">
          <div class="realtive">
            <div
              class="h-48 w-42 rounded-lg transition hover:scale-105 hover:rotate-1"
              style="
                background-size: cover;
                background-position: center;
                background-image: url(https://images.unsplash.com/photo-1628595351029-c2bf17511435?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjB8fE1lZGljaW5lfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60);
              "
            ></div>
            <span>
              <img
                class="w-10 h-10 rounded-full absolute top-0 left-0"
                src="../../../public/images/quoteify.png"
                alt="Quotify"
              />
            </span>
            <span
              class="ml-1 drop-shadow-md [text-shadow:_0_1px_0_rgb(0_0_0_/_40%)] font-bold text-white text-xl absolute bottom-0 left-0 mb-2"
              >Medicine</span
            >
          </div>
        </div>
      </swiper-slide>

      <swiper-slide>
        <div class="max-w-sm rounded overflow-hidden cursor-pointer">
          <div class="realtive">
            <div
              class="h-48 w-42 rounded-lg transition hover:scale-105 hover:rotate-1"
              style="
                background-size: cover;
                background-position: center;
                background-image: url(https://images.unsplash.com/photo-1483638694934-2e6f027d02bf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fEVudmlyb25tZW50YWx8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60);
              "
            ></div>
            <span>
              <img
                class="w-10 h-10 rounded-full absolute top-0 left-0"
                src="../../../public/images/quoteify.png"
                alt="Quotify"
              />
            </span>
            <span
              class="ml-1 drop-shadow-md [text-shadow:_0_1px_0_rgb(0_0_0_/_40%)] font-bold text-white text-xl absolute bottom-0 left-0 mb-2"
              >Environment</span
            >
          </div>
        </div>
      </swiper-slide>
      ...
    </swiper>
  </div>
</template>
<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";

// Import Swiper styles
import "swiper/css";

export default {
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    const onSwiper = (swiper) => {
      console.log(swiper);
    };

    const onSlideChange = () => {
      console.log("slide change");
    };

    return {
      onSwiper,
      onSlideChange,
    };
  },
};
</script>
