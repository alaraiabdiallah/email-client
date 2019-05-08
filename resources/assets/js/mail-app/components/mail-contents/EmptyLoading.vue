<template>
    <content-loader
        :height="200"
        :width="400"
        :speed="2"
        primaryColor="#f3f3f3"
        secondaryColor="#ecebeb"
    >
        <rect x="127" y="83" rx="4" ry="4" width="150" height="17.94" /> 
        <rect x="79" y="116" rx="4" ry="4" width="250" height="11.76" /> 
        <rect x="124.5" y="147.27" rx="0" ry="0" width="151" height="34" /> 
        <rect x="168.5" y="21.27" rx="0" ry="0" width="65" height="47" /> 
        <rect x="271.5" y="367.27" rx="0" ry="0" width="0" height="0" />
    </content-loader>
</template>

<script>
import { ContentLoader } from 'vue-content-loader'
export default {
    components:{
        ContentLoader
    }
}
</script>

