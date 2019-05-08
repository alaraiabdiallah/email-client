<template>
    <div class="mail-lists-wrapper">
        <mailbox-header></mailbox-header>
        <mailbox>
            <mail-item no="1"></mail-item>
            <mail-item no="2"></mail-item>
            <mail-item no="3"></mail-item>
            <mail-item no="4"></mail-item>
            <mail-item no="5"></mail-item>
            <mail-item no="6"></mail-item>
            <mail-item no="7"></mail-item>
            <mail-item no="8"></mail-item>
            <mail-item no="9"></mail-item>
            <mail-item no="10"></mail-item>
            <mail-item no="11"></mail-item>
            <mail-item no="12"></mail-item>
            <mail-item no="13"></mail-item>
            <mail-item no="14"></mail-item>
            <mail-item no="15"></mail-item>
            <mail-item no="16"></mail-item>
            <mail-item no="17"></mail-item>
            <mail-item no="18"></mail-item>
            <mail-item no="19"></mail-item>
            <mail-item no="20"></mail-item>
            <mail-item no="21"></mail-item>
        </mailbox>
    </div>
</template>

<script>
import Header from './Header';
import Mailbox from './Mailbox';
import Mailitem from "./Mailitem";
export default {
    components: {
        'mailbox-header':  Header,
        'mailbox':  Mailbox,
        'mail-item': Mailitem
    }
}
</script>
