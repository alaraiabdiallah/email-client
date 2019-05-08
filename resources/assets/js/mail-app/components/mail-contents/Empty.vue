<template>
    <div class="empty">
        <div v-if="!onLoading">
            <div class="empty-icon">
                <i class="icon icon-mail icon-4x"></i>
            </div>
            <p class="empty-title h5">No mail selected</p>
            <p class="empty-subtitle">Click the button to compose an e-mail.</p>
            <div class="empty-action">
                <button class="btn btn-primary">Compose an e-mail</button>
            </div>
        </div>
        <div class="loading-placeholder" v-else>
            <empty-loading></empty-loading>
        </div>
    </div>
</template>

<script>
import EmptyLoading from './EmptyLoading';
export default {
    components:{
        'empty-loading': EmptyLoading
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
