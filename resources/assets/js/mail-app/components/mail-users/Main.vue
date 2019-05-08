<template>
    <div class="mail-users-wrapper">
        <div class="text-center" v-if="!onLoading">
            <button class="btn btn-action s-circle btn-user" @click="$emit('addUser')">
                <i class="icon icon-plus"></i>
            </button>
            <button class="btn btn-action s-circle btn-user" @click="$emit('selectUser')">
                A
            </button>
        </div>
        <div class="text-center" v-else>
            <content-loader
                :height="250"
                :width="100"
                :speed="2"
                primaryColor="#fff"
                secondaryColor="#eee"
            >
                <circle cx="49.5" cy="56.96" r="47.5" /> 
                <circle cx="50.5" cy="174.95999999999998" r="47.5" />
            </content-loader>
        </div>
    </div>
</template>

<script>
import { ContentLoader } from 'vue-content-loader'
export default {
    components:{
        ContentLoader
    },
    data: function(){
        return {
            onLoading: true
        }
    },
    created: function(){
        setTimeout(() => {
            this.onLoading = false;
        }, 2000);
    }
}
</script>
