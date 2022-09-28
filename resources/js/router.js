// resources/js/router.js

import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import Home from "./pages/Home";
import SingleProduct from "./pages/SingleProduct";
import Page404 from "./pages/Page404"
const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home
        },
        {
            path: "/products/:id",
            name: "single-product",
            component: SingleProduct
        },
        {
            path: "/*",
            name: "page-404",
            component: Page404
        },
    ]
});

export default router;