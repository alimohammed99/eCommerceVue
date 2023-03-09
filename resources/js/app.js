require('./bootstrap')

import { createApp } from 'vue'
import Welcome from './components/Welcome'
import AddToCartButton from './components/AddToCartButton'
import BadgeIcon from './components/BadgeIcon'
import Cart from './components/Cart'
import Checkout from './components/Checkout'

const app = createApp({})

app.component('welcome', Welcome)

app.component('add-to-cart-button', AddToCartButton)

app.component('badge-icon', BadgeIcon)

app.component('cart', Cart)

app.component('checkout', Checkout)

app.mount('#app')






