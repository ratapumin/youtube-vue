<template >
  <div class="bg w-screen h-screen">
    <div class="flex justify-center items-center w-screen h-screen">
      <!-- step1 -->
      <div
        v-if="step === 1"
        class="w-3/4 h-96 bg-white rounded-3xl p-9 flex flex-col"
      >
        <div class="w-3/6 flex justify-start flex-col">
          <img
            src="@/assets/googleLogo.png"
            alt="googleLogo"
            class="w-14 h-14"
          />
        </div>
        <div class="flex-1 flex flex-row">
          <div class="sign-in pr-6">
            <h1 class="text-4xl">Sign in</h1>
            <p class="pt-5">to continue to YouTube</p>
            <p>step {{ step }} {{ email }}</p>
          </div>
          <div class="flex flex-col justify-between email pl-6 relative">
            <div class="flex flex-col">
              <input
                type="text"
                v-model="email"
                class="border border-black rounded w-full text-base text-left py-3.5 px-3.5 focus:outline-none focus:border-blue-500 peer"
              />
              <label> Email or Phone </label>
              <p class="pt-2 pb-1 text-blue-700">Forgot email?</p>
            </div>

            <div class="flex">
              <p class="text-sm">
                Not your computer? Use Guest mode to sign in privately.
                <span class="text-blue-700">
                  Learn more about using Guest mode</span
                >
              </p>
            </div>
          </div>
        </div>
        <!-- btn -->
        <div class="flex w-full justify-end h-14 items-center">
          <button
            class="h-10 w-38 p-4 flex justify-center items-center hover:bg-gray-50 hover:rounded-full"
          >
            <span class="text-sm text-blue-500"> Create account</span>
          </button>
          <div class="h-10 flex justify-center items-center ml-10">
            <button
              @click="nextStep"
              class="w-20 bg-blue-700 text-white h-10 rounded-full inline hover:bg-blue-800"
            >
              <span class="text-sm">Next</span>
            </button>
          </div>
        </div>
      </div>
      <!-- step2 -->
      <div
        v-if="step === 2"
        class="w-3/4 h-96 bg-white rounded-3xl p-9 flex flex-col"
      >
        <div class="w-3/6 flex justify-start flex-col">
          <img
            src="@/assets/googleLogo.png"
            alt="googleLogo"
            class="w-14 h-14"
          />
        </div>
        <div class="flex-1 flex flex-row">
          <div class="sign-in pr-6">
            <h1 class="text-4xl">Hi {{ email }}</h1>
            <!-- <p class="pt-5">to continue to YouTube</p> -->
            <p>step {{ step }} {{ email }}</p>
          </div>
          <div class="flex flex-col justify-between email pl-6 relative">
            <div class="flex flex-col">
              <input
                type="password"
                v-model="password"
                class="border border-black rounded w-full text-base text-left py-3.5 px-3.5 focus:outline-none focus:border-blue-500 peer"
              />
              <label>Enter your password </label>
              <p class="pt-2 pb-1 text-black">
                <input type="checkbox" /> <span> Show password</span>
              </p>
            </div>

            <div class="flex">
              <p class="text-sm">
                <button @click="backStep" class="text-blue-700">
                  Back Step
                </button>
              </p>
            </div>
          </div>
        </div>
        <div class="flex w-full justify-end h-14 items-center">
          <button
            @click="backStep"
            class="h-10 w-38 p-4 flex justify-center items-center hover:bg-gray-50 hover:rounded-full"
          >
            <span class="text-sm text-blue-500"> Forgot password?</span>
          </button>
          <div class="h-10 flex justify-center items-center ml-10">
            <button
              class="w-20 bg-blue-700 text-white h-10 rounded-full inline hover:bg-blue-800"
            >
              <span @click="step === 2" class="text-sm">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "UserLogin",
  data() {
    return {
      step: 1,
      email: "",
      password: "",
    };
  },
  methods: {
    backStep() {
      this.step = 1;
      this.email = "";
    },
    nextStep() {
      if (this.email) {
        this.step = 2;
      } else {
        alert("Please enter your email or phone");
      }
    },
    handleSubmit() {
      // แสดงข้อความการล็อกอินเมื่อมีข้อมูลอีเมลและรหัสผ่าน
      if (this.step === 2 && this.password) {
        alert(`Login with Email: ${this.email} and Password: ${this.password}`);
      } else if (this.step === 2) {
        alert("Please enter your password");
      }
    },
  },
};
</script>
<style scoped>
.bg {
  background-color: #f0f4f9;
}
.logo {
  width: 48px;
  height: 48px;
}

.sign-in {
  width: 50%;
  /* min-width: 600px; */
}
.email {
  width: 50%;
  height: 180px;
}
label {
  position: absolute;
  top: 13px;
  left: 40px;
  color: gray;
  width: auto;
  margin: 0 auto;
  cursor: text;
  transition: all 0.2s;
}
label:focus {
  content: "";
  height: 5px;
  background-color: white;
  position: absolute;
  top: 10px;
  left: 0;
  width: 100%;
  z-index: -1;
}

input:focus + label {
  top: -10px;
  color: #0b57d0;
  font-size: 13px;
  background-color: white;
}
input:focus::placeholder {
  font-size: 16px;
  opacity: 0;
  transition: all 0.3s;
}
input:focus::placeholder {
  opacity: 1;
  animation-delay: 0.2s;
}
</style>