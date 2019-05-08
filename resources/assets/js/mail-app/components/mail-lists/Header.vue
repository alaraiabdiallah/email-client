<template>
    <div class="columns mail-box-header">
        <template v-if="!onLoading">
            <div class="column col-10" style="position: relative;">
                <div class="form-group">
                    <label>Mailbox</label>
                    <select class="form-select">
                        <option>Inbox</option>
                        <option>Sent</option>
                        <option>Draft</option>
                    </select>
                </div>
            </div>
            <div class="column col-2">
                <button class="btn btn-link"><i class="icon icon-edit"></i></button>
                <button class="btn btn-link"><i class="icon icon-refresh"></i></button>
            </div>
        </template>
        <template v-else>
            <loading-header></loading-header>
        </template>
    </div>
</template>
<script>
import HeaderLoading from "./HeaderLoading";
export default {
    components:{
        'loading-header': HeaderLoading
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

