<template>
    <div>
        <item-loading v-for="index in 8" :key="index"></item-loading>
    </div>
</template>

<script>
import MailitemLoading from "./MailitemLoading";
export default {
    components:{
        'item-loading':MailitemLoading
    }
}
</script>
