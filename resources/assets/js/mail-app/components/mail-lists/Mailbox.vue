<template>
    <div class="mail-box">
        <ul class="menu" v-if="!onLoading">
            <slot></slot>
        </ul>
        <template v-else>
            <mailbox-loading></mailbox-loading>
        </template>
    </div>
</template>

<script>
import MailboxLoading from './MailboxLoading';
export default {
    components:{
        'mailbox-loading': MailboxLoading
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
