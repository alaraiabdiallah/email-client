<template>
    <div class="mail-app-wrapper" v-bind:class="{ 'user-selected' : selectedUser}">
        <mail-users v-on:addUser="onAddUser()" v-on:selectUser="onSelectUser()"></mail-users>
        <mail-lists v-if="selectedUser"></mail-lists>
        <mail-contents></mail-contents>
    </div>
</template>

<script>
import * as MailUsersComponent from "./mail-users/Main";
import * as MailListsComponent from "./mail-lists/Main";
import * as MailContentsComponent from "./mail-contents/Main";

export default {
    data: function(){
        return {
            user: {}
        }
    },
    computed: {
        selectedUser: function () {
            return this.user != null
        }
    },
    components: {
        'mail-users': MailUsersComponent,
        'mail-lists': MailListsComponent,
        'mail-contents': MailContentsComponent
    },
    methods: {
        onAddUser: function(){
            console.log("onAddUser");
            this.user = null;
        },
        onSelectUser: function(){
            console.log("onSelectUser");
            this.user = {};
        }
    }
}
</script>



