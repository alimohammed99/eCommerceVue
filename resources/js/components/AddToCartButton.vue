<template>
    <a href @click.prevent="addToCart"><i class="icon-shopping-cart2"></i> Add to Cart</a>
</template>

<script>
export default {
    // setup: () => ({
    // }) 

    name: "AddToCartButton",
    props: {
        product: {
            required: true,
            type: Object
        }
    },
    methods: {
        async addToCart() {
            // alert(this.product.id)
            // return
            let response = await axios.post('/cart', { 'product_id': this.product.id });
            this.$root.$emit('changeBasketCount', response.data.basket_count)

            // console.log("data", response);

            // console.log(response.data);
        }
    }
}
</script>

<style  scoped></style>