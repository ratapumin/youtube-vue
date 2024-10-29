<template>
  <div class="flex items-center w-full h-14 justify-between">
    <img src="@/assets/youLogo.png" alt="youtubeLogo" width="131" height="30" />

    <div class="w-7/12 flex items-center border-black justify-center relative">
      <i
        v-show="showIcon"
        class="fa-solid fa-magnifying-glass text-gray-500"
      ></i>

      <input
        type="text"
        class="border-solid border-2 rounded-l-3xl w-3/5 h-10 pl-8 pr-10"
        placeholder="Search..."
      />

      <button
        class="bg-stone-100 rounded-r-3xl h-10 w-16 px-4 flex items-center"
      >
        <i class="fa-solid fa-magnifying-glass"></i>
      </button>

      <button class="bg-stone-100 rounded-full w-10 h-10 ml-5">
        <i class="fas fa-microphone"></i>
      </button>
    </div>
    <div class="flex items-center justify-end pl-5 pr-5">
      <button class="w-10 h-10">
        <i class="fa-solid fa-video"></i>
      </button>
      <button class="w-10 h-10">
        <i class="fa-solid fa-bell"></i>
      </button>
      <button class="bg-stone-100 rounded-full w-10 h-10">
        <i class="fa-regular fa-user"></i>
      </button>
    </div>
  </div>
  <div class="flex m-3  justify-start items-center">
    <p  class="p-3 bg-stone-200 m-1 min-w-3  h-8 text-center inline-flex items-center rounded-lg relative cursor-pointer"
     v-for="(item, index) in miniMenu" :key="index">
      {{ item }}
    </p>
  </div>
</template>
  
  <script>
export default {
  name: "LanddingPage",
  data() {
    return {
      showIcon: false,
      miniMenu: [
        "ทั้งหมด",
        "พอดแคสต์",
        "เพลง",
        "ข่าวสาร",
        "ซิทคอม",
        "มิกซ์",
        "เกม",
        "ไลฟ์สด",
        "เพลงแร็ป",
        "อัปโหลดล่าสุด",
        "ดูแล้ว",
        "วิดีโอใหม่สำหรับคุณ",
      ],
    };
  },
};
</script>
  
  <style scoped>
input {
  position: relative; /* เพื่อให้ไอคอนสามารถวางอยู่บน input */
}

.ml-3 {
  margin-left: 10px; /* ปรับระยะห่างระหว่างไอคอนกับ input */
}
</style>
  