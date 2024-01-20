import {
	createRouter,
	createWebHistory
} from "vue-router";

import HomeView from "../App.vue";
import ErrorPage from "../views/Error/404-Page.vue";


const routes = [{
	path: "/",
	name: "Home",
	component: HomeView,
},
// الحالة الأخيرة
// اللي بتمثل 
// 404 page errore
{
	path: "/:catchAll(.*)",
	component: HomeView,
},
];

const router = createRouter({
	history: createWebHistory('/'),
	routes,
});

// أسماء الصفحات في مشروعي
router.beforeEach((to, from, next) => {

	document.title = `Home | ${import.meta.env.VITE_VUE_APP_TITLE}`;
	
	next();

});

export default router;