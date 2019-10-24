<template>
    <div class="custom_dropdown_list">
        <span class="custom_dropdown_placeholder clc">All location</span>
        <i class="fas fa-chevron-down"></i>
        <ul class="custom_list clcl">
            <li v-for="(location,index) in allLocations.locations"><a class="clc" href="#" :id="location.id">{{location.name}}</a></li>

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
            ...mapActions(['fetchLocations'])
        },
        computed: mapGetters(['allLocations']),
        created(){
            this.fetchLocations();
        }
    }
</script>
