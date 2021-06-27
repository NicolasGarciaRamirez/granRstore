<template>
    <div class="d-flex flex-row">
        <a class="btn btn-danger mx-2" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" @click="login = true">
            Login
        </a>
        <button class="btn btn-danger mx-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" @click="login = false">
            Register
        </button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <login v-if="login"></login>
                <register v-if="!login"></register>
            </div>
        </div>
    </div>
</template>

<script>
    import login from "../login";
    import register from "../register";
    export default {
        name: "AppHeader",
        data(){
            return {
                login:false
            }
        },
        components:{
            login,
            register
        }
    }
</script>

<style scoped>

</style>
