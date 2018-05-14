
import './bootstrap'

import VueRouter from 'vue-router'



let router = new VueRouter({
	routes : [
		{
			path:"/",
			component : require("./components/Settings")
		},
		{
			path:"/Services",
			component : require("./components/Services")
		},
		{
			path:"/Features",
			component : require("./components/Features")
		},
		{
			path:"/Portfolio",
			component : require("./components/Portfolio")
		},
		{
			path:"/Team",
			component : require("./components/Team")
		},
		{
			path:"/Testimonial",
			component : require("./components/Testimonial")
		},
		{
			path:"/Menu",
			component : require("./components/Menu")
		},
		{
			path:"/Contact",
			component : require("./components/Contact")
		},
		{
			path:"/Blog",
			component : require("./components/Blog")
		},

	],
	linkActiveClass:"is-active"
})

new Vue({
    el: '#app',
    router,
    data:{
    	components:[]
    },
    created() {
    	axios.get("/admin/component-list").then(({data})=>{
    		this.components = data
    	})

    }
});
