<template>
    <div class="custom_dropdown_list">
        <span class="custom_dropdown_placeholder clc">All Categories</span>
        <i class="fas fa-chevron-down"></i>
        <ul class="custom_list clc">
            <li v-for="(category,index) in allCategories.categories"><a class="clc" href="#" :id="category.id">{{category.name}}</a></li>
        </ul>
    </div>
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
        }
    }
</script>
