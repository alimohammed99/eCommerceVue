<template>
    <section id="contact-area" data-scroll-index="6">
        <div class="container">
            <div class="row">
                <!--start section heading-->
                <div class="col-lg-6 col-md-8">
                    <div class="section-heading">
                        <h2>MY CART</h2>

                    </div>
                </div>
                <!--end section heading-->
            </div>
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-10 col-md-offset-1">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Total</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(basket, index) in basketList" :key="index">
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <a class="thumbnail pull-left" href="#"> <img class="media-object w-full"
                                                        :src="'/images/' + basket.product.image"
                                                        style="width:; height: 100px;"> </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading ml-3"><a href="#">{{ basket.product.name }}</a>
                                                    </h4>
                                                    <h5 class="media-heading ml-3"> by <a href="#">Brand name</a>
                                                    </h5>
                                                    <span class="ml-3">Status: </span><span class="text-success"><strong>In
                                                            Stock</strong></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center">
                                            <input type="number" class="form-control" id="exampleInputEmail1"
                                                :value="basket.quantity">
                                        </td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong>{{ basket.price }}</strong></td>
                                        <td class="col-sm-1 col-md-1 text-center"><strong>{{ basket.price * basket.quantity
                                        }}</strong></td>
                                        <td class="col-sm-1 col-md-1">
                                            <button type="button" class="btn btn-danger">
                                                <span class="glyphicon glyphicon-remove"></span> Remove
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>   </td>
                                        <td>   </td>
                                        <td>   </td>
                                        <td>
                                            <h5>Subtotal</h5>
                                        </td>
                                        <td class="text-right">
                                            <h5><strong>${{ subTotal }}</strong></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>   </td>
                                        <td>   </td>
                                        <td>   </td>
                                        <td>
                                            <h5>Estimated shipping</h5>
                                        </td>
                                        <td class="text-right">
                                            <h5><strong>$6.94</strong></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>   </td>
                                        <td>   </td>
                                        <td>   </td>
                                        <td>
                                            <h3>Total</h3>
                                        </td>
                                        <td class="text-right">
                                            <h3><strong>${{ total }}</strong></h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>   </td>
                                        <td>   </td>
                                        <td>   </td>
                                        <td>
                                            <button type="button" class="btn btn-default">
                                                <span class="glyphicon glyphicon-shopping-cart"></span> Continue
                                                Shopping
                                            </button>
                                        </td>
                                        <td>
                                            <a href="/checkout" type="button" class="btn btn-success">
                                                Checkout <span class="glyphicon glyphicon-play"></span>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--start contact image-->
                <div class="col-md-5">
                    <div class="contact-img text-center">
                        <img src="images/watch-10.png" class="img-fluid animation-jump" alt>
                    </div>
                </div>
                <!--end contact image-->
            </div>
        </div>
    </section>
</template>
 
<script>
export default {
    // setup: () => ({
    // }) 

    name: "Cart",
    data() {
        return {
            subTotal: 0
        }
    },
    props: {
        basketList: {
            required: true,
            type: Object
        }
    },
    beforeMount() {

        let sum = 0;

        for (let m = 0; m < this.basketList.length; m++) {

            sum += this.basketList[m].price * this.basketList[m].quantity;
        }

        this.subTotal = sum
    },
    computed: {
        total() {
            return this.subTotal + 6.94
        }
    }


}
</script> 

<style  scoped></style>