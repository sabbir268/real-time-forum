import Vue from 'vue'
import VueRouter from 'vue-router'
import Login from '../components/auth/Login.vue'
import SignUp from '../components/auth/SignUp.vue'
import Logout from '../components/auth/Logout.vue'
import Forum from '../components/forum/Forum.vue'

Vue.use(VueRouter)

const routes = [
	{
		path: '/login',component:Login,
	},
	{
		path: '/logout',component:Logout,
	},
	{
		path: '/signup',component:SignUp,
	},
	{
		path: '/forum',component:Forum,
		name: 'forum'
	}
	
]

const router = new VueRouter({
	routes: routes,
	hashbang:false,
	mode:'history'
}) 

export default router
