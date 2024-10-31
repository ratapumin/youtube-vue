import { createApp } from 'vue';
import App from './App.vue';
import Antd from 'ant-design-vue';
import '@fortawesome/fontawesome-free/css/all.css';
import { createRouter, createWebHistory } from 'vue-router';
import './index.css'
import LanddingPage from './components/LanddingPage.vue';
import UserLogin from './components/UserLogin.vue';



const routes = [
    { path: '/', component: LanddingPage },
    { path: '/userlogin', component: UserLogin }
];

const router = createRouter({
    history: createWebHistory(), // เปลี่ยนเป็น createWebHistory()
    routes,
});

const app = createApp(App);
app.use(Antd);
app.use(router);
app.mount('#app');
