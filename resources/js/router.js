import { createWebHistory, createRouter } from "vue-router";
import WebHome from "./Pages/Website/Index.vue";
import WebAbout from "./Pages/Website/About.vue";
import WebForm from "./Pages/Website/Form.vue";
import WebGallery from "./Pages/Website/Gallery.vue";
import WebContact from "./Pages/Website/Contact.vue";

// Admin Route
import Login from "./Pages/Admin/Auth/Login.vue";
import AuthHome from "./Pages/Admin/Dashboard/Index.vue";

import Widow from "./Pages/Admin/Dashboard/Widow.vue";
import Foods from "./Pages/Admin/Dashboard/Foods.vue";
import Shopkeeper from "./Pages/Admin/Dashboard/ShopKeeper.vue";
import Reports from "./Pages/Admin/Dashboard/Reports.vue";
import Package from "./Pages/Admin/Dashboard/Package.vue";

const routes = [
    { path: "/", component: WebHome },
    { path: "/about", component: WebAbout },
    { path: "/form", component: WebForm },
    { path: "/gallery", component: WebGallery },
    { path: "/contact", component: WebContact },
    // Admin Routes
    { path: "/login", component: Login },
    { path: "/auth/home", component: AuthHome },
    { path: "/auth/widow", component: Widow },
    { path: "/auth/foods", component: Foods },
    { path: "/auth/shopkeeper", component: Shopkeeper },
    { path: "/auth/report", component: Reports },
    { path: "/auth/package", component: Package },

];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
