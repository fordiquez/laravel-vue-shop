<template>
  <Header />
  <main class="flex-grow overflow-x-hidden">
    <RouterView />
  </main>
  <Footer/>
</template>
<script>
import Header from "./components/Header.vue";
import Footer from "./components/Footer.vue";

export default {
  components: {Header, Footer}
}
</script>