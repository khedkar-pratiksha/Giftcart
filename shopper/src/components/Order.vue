<template>
<section id="cart_items">
    <div class="container" v-if="orders.length>0">
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="text-center">Name</td>
                        <td class="image" style="width: 100px;">Item</td>
                        <td class="quantity">Quantity</td>
                        <td class="price">Price</td>
                        <td class="total">Status</td>
                        <td>Payment Mode</td>
                        <td>Payment Status</td>
                        <td>Transaction Id</td>
                    </tr>
                </thead>
                <tbody v-for="(item, i) in orders" :key="i">
                    <tr>
                        <td class="text-center">
                          {{item.product_name}}
                        </td>
                        <td >
                            <router-link :to="`/productdetails/${item.id}`">
                            <img :src="url+item.image" width="100" height="70" alt="Card image cap" />
                            </router-link>
                        </td>
                        <td class="cart_quantity pl-3">
                            <p>{{item.quantity}}</p>
                        </td>
                        <td class="cart_price">
                            <!-- <p>{{ item.price }}*{{ item.quantity }}</p> -->
                            <p>&#8377;{{ item.price*item.quantity }}</p>
                        </td>
                        <td class="cart_total">
                            <p >
                                {{item.status}}
                            </p>
                        </td>
                        <td>
                            <p>{{item.pmode?"Online":"Cash on delivery"}}</p>
                        </td>
                        <td>
                            <p>{{item.pstatus?"Completed":"Pending"}}</p>
                        </td>
                        <td>
                            <p>{{item.trans_id?item.trans_id:"N.A."}}</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container text-center" v-else>
        <i class="fa fa-shopping-cart fa-5x" style="color:#326647"></i>
        <h1>History Not Found!</h1>
        <br>
    </div>
</section>
<!--/#cart_items-->
</template>

<script>
import {viewOrder} from '@/common/Service'
export default {
    name: "Cart",
    data() {
        return {
            orders: [],
            id:localStorage.getItem('userid'),
            url:"http://127.0.0.1:8000/images/products/"
        };
    },
    created() {
        this.viewOrder();
    },
    methods: {
        viewOrder() {
            viewOrder(this.id).then((res)=>{
                this.orders = res.data.orders;
                console.log(this.orders)
            })
        },
    },
};
</script>

<style>
</style>
