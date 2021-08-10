import {createRouter, createWebHistory} from 'vue-router'
import About from '../pages/About'
import Home from '../pages/Home'
import Landing from '../pages/Landing'

const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home
    },
    {
        path: '/home',
        name: 'Landing',
        component: Landing
    },
    {
        path: '/about',
        name: 'About',
        component: About
    }
]

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
})

export default router