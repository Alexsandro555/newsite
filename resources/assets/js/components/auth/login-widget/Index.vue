<template>
    <div>
        <div v-if="username">
            <a class="login-widget" href="/admin">{{username}}</a>
        </div>
        <div v-else>
            <a href="#" @click.stop="onLogin" class="header-menu__auth-btn">Вход на сайт</a>
            <a href="#" @click.stop="registration" class="header-menu__auth-btn">Регистрация</a>
        </div>
    </div>
</template>
<script>
    export default {
        props: { },
        data: function() {
            return {
                username: null
            }
        },
        mounted() {
            axios.get('/authenticated').then((response) => {
                this.username = response.data
            }).catch(err => {
                console.log(err)
            })
        },
        methods: {
            onLogin() {
                this.$store.dispatch('auth/active')
            },
            onAdmin() {
                this.$store.dispatch('auth/adminView')
                this.$router.push('admin')
            },
            registration() {
                this.$store.dispatch('auth/registration')
            }
        }
     }
</script>

<style>
    .login-widget {
        color: #1e88d7;
        text-decoration: none;
        line-height: 54px;
        margin-right: 25px;
    }
</style>