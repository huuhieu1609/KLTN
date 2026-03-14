import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import Default from './Layout/Wrapper/index.vue'
import Client from './layout/wrapper/client.vue'
import Black from './layout/wrapper/black.vue'
import Toaster from "@meforma/vue-toaster";

const app = createApp(App)

app.use(router)
app.use(Toaster, {
    position: "top-right",
});
app.component("default-layout", Default);
app.component("client-layout", Client);
app.component("black-layout", Black);

app.mount("#app")