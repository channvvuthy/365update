<template>
    <div>
        <div class="loading" v-if="allProducts.length<=0">Loading....</div>
        <div v-else>
            <div class="adverts">
                <div class="container">
                    <div class="viewed_title_container"><h3 class="viewed_title">Latest Ads</h3></div>
                    <br>
                    <div class="row break">
                        <div class="col-lg-3 advert_col" v-for="(product,index) in allProducts.products">
                            <div class="product">
                                <a :href="homeUrl+'/detail/'+product.id">
                                    <!-- Advert Item -->
                                    <div class="img-box" style="width: 100%;height: 180px;">
                                        <img :src="image(product.images)" alt="" class="img-product"
                                             style="max-width: 100%;height: 180px;">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="title"><a :href="homeUrl+'/detail/'+product.id">{{product.name}}</a></div>
                                    <div class="p-rice"><b>${{product.price}}</b></div>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="adverts" style="padding-top: 0px;">
                <div class="container">
                    <div class="viewed_title_container"><h3 class="viewed_title">Popular Ads</h3></div>
                    <br>
                    <div class="row break">
                        <div class="col-lg-3 advert_col" v-for="(popular,index) in allProducts.popular">
                            <div class="product">
                                <!-- Advert Item -->
                                <a :href="homeUrl+'/detail/'+popular.id">
                                    <div class="img-box" style="width: 100%;height: 180px;">
                                        <img :src="image(popular.images)" alt="" class="img-product"
                                             style="max-width: 100%;height: 180px;">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="title"><a :href="homeUrl+'/detail/'+popular.id">{{popular.name}}</a></div>
                                    <div class="p-rice"><b>${{popular.price}}</b></div>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    import {mapGetters, mapActions} from "vuex";
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            ...mapActions(['fetchProducts']),
            image: function (data) {
                if (data != null) {
                    return JSON.parse(data)[0];
                }
            }
        },
        computed: mapGetters(['allProducts']),
        created(){
            this.fetchProducts()
        },
        data(){
            return {
                homeUrl: "http://127.0.0.1:8000"
            }
        }
    }
</script>
