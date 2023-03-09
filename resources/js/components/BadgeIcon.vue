<template>
    <span class="badge badge-primary align-top">{{ basketCount }}</span>
</template>

<script>
export default {
    // setup: () => ({
    // }) 

    name: "BadgeIcon",
    data() {
        return {
            basketCount: ''
        }
    },
    mounted() {
        this.$root.$on('changeBasketCount', (newBasketCount) => {
            this.basketCount = newBasketCount

        })
    }

}
</script> 

<style  scoped></style>