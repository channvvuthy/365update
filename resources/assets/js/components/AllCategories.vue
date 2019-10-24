<template>
    <ul class="cat_menu hidden">

        <li v-for="(category,index) in allCategories.categories" v-if="category.sub_category.length" class="hassubs"><a
                class="clc" href="#" :id="category.id">{{category.name}} <i
                class="fas fa-chevron-right"></i></a>
            <ul>

                <li v-for="(sub,index) in category.sub_category" :id="sub.id"><a :href="homeUrl+'category/'+sub.name">{{sub.name}}<i
                        class="fas fa-chevron-right"></i></a>
                </li>
            </ul>
        </li>

        <li v-else :id="category.id"><a href="#">{{category.name}}<i class="fas fa-chevron-right"></i></a></li>
    </ul>
</template>

<script>
    import {mapGetters, mapActions} from "vuex";
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            ...mapActions(['fetchCategories'])
        },
        computed: mapGetters(['allCategories']),
        created(){
            this.fetchCategories();
            console.log(this.homeUrl)
        },
        data(){
            return {
                homeUrl: "http://127.0.0.1:8000/"
            }
        }
    }
</script>
