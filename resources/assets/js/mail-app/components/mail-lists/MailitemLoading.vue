<template>
    <content-loader
		:height="75"
		:width="250"
		:speed="2"
		primaryColor="#f3f3f3"
		secondaryColor="#ecebeb"
        class="loading-placeholder"
	>
		<rect x="10" y="46.01" rx="4" ry="4" width="159.12" height="8.9" /> 
		<rect x="10" y="22.47" rx="3" ry="3" width="136.85" height="10.3" /> 
		<circle cx="229.2242494429281" cy="36.99424944292811" r="11.724249442928105" />
	</content-loader>
</template>

<script>
import { ContentLoader } from 'vue-content-loader';
export default {
    components:{
        ContentLoader
    },
}
</script>
