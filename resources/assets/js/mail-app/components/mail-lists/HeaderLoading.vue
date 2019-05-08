<template>
    <content-loader
        :height="100"
        :width="300"
        :speed="2"
        primaryColor="#f3f3f3"
        secondaryColor="#ecebeb"
        class="loading-placeholder"
    >
        <rect x="12" y="56" rx="4" ry="4" width="117" height="20.99" /> 
        <rect x="11" y="26.27" rx="3" ry="3" width="57.8" height="13.12" /> 
        <circle cx="268.24499877989257" cy="32.51499877989256" r="10.244998779892558" /> 
        <circle cx="268.24499877989257" cy="66.51499877989257" r="10.244998779892558" />
    </content-loader>
</template>
<script>
import { ContentLoader } from 'vue-content-loader'
export default {
    components:{
        ContentLoader
    },
}
</script>

