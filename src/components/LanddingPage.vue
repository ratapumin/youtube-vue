<template>
  <div class="flex items-center w-full flex-1 h-14 pl-4">
    <button class="hover:bg-stone-200 w-11 h-11 hover:rounded-full">
      <i class="fa-solid fa-bars"></i>
    </button>
    <img src="@/assets/youLogo.png" alt="youtubeLogo" width="130" height="29" />

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
    <div class="flex items-center justify-end pr-11 flex-1">
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

  <div class="flex flex-1">
    <div class="left-0 w-18 flex-none h-full p-1">
      <ul class="flex items-center justify-center flex-col">
        <button class="hover:bg-stone-200 w-full h-20 hover:rounded-lg">
          <i class="fa-solid fa-house"></i>
          <li class="text-xs">หน้าแรก</li>
        </button>
        <button class="hover:bg-stone-200 w-full h-20 hover:rounded-lg">
          <i class="fa-brands fa-squarespace"></i>
          <li class="text-xs">Short</li>
        </button>
        <button class="hover:bg-stone-200 w-full h-20 hover:rounded-lg">
          <i class="fa-solid fa-square-caret-right"></i>
          <li class="text-xs">การติดตาม</li>
        </button>
        <button
          class="hover:bg-stone-200 w-full h-20 hover:rounded-lg flex-col items-center justify-center"
        >
          <i class="fa-solid fa-circle-play mr-2"></i>
          <li class="fontsie truncate">Youtube Music</li>
        </button>

        <button class="hover:bg-stone-200 w-full h-20 hover:rounded-lg">
          <i class="fa-regular fa-circle-user"></i>
          <li class="fontsie">คุณ</li>
        </button>
        <button class="hover:bg-stone-200 w-full h-20 hover:rounded-lg">
          <i class="fa-solid fa-arrow-down"></i>
          <li class="fontsie">การดาวน์โหลด</li>
        </button>
      </ul>
    </div>
    <div class="flex-1">
      <div class="flex m-3 justify-start items-center">
        <p
          class="p-3 bg-stone-200 m-1 min-w-3 h-8 text-center inline-flex items-center rounded-lg relative cursor-pointer"
          v-for="(item, index) in miniMenu"
          :key="index"
        >
          {{ item }}
        </p>
      </div>
      <div>
        <div class="flex flex-row flex-wrap justify-evently gap-y-5 gap-x-5 m-5" >
          <div
            class="flex flex-col border-2 videoBox justify-center items-center rounded-2xl text-center p-2 hover:rounded-none"
            v-for="(product, index) in productList"
            :key="index"
          >
            <img :src="product.image" alt="imgProduct" class="w-36 h-36" />
            <p>{{ product.title }}</p>
          
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

  
  <script>
import axios from "axios";

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
      productList: [],
    };
  },
  methods: {
    async getPokemonData() {
      try {
        const res = await axios.get(`https://fakestoreapi.com/products/`);
        console.log(res.data);
        this.productList = res.data;
      } catch (error) {
        console.error("ไม่พบข้อมูล Pokémon:", error);
      }
    },
  },
  mounted() {
    this.getPokemonData();
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

.fontsie {
  font-size: 10px; /* คุณสามารถตั้งค่าเป็น 5px ได้เช่นกัน */
}
.videoBox{
  width: 450px;
  height: 250px;
  min-height: 250px;
}
</style>
  