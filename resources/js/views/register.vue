<template>
    <section>
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div>
                <h3>Register</h3>
            </div>
            <form @submit.prevent="register">
                <div class="form-group">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="nameInput" placeholder="name" v-model="name">
                        <label for="nameInput">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" v-model="email">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInputConfirmation" placeholder="name@example.com" v-model="confirmation_email">
                        <label for="floatingInputConfirmation">Confirmation Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" v-model="password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPasswordConfirmation" placeholder="Confirmation Password" v-model="confirmation_password">
                        <label for="floatingPasswordConfirmation">Confirmation Password</label>
                    </div>
                    <div class="text-center mt-2">
                        <button type="submit" class="btn btn-danger">register</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</template>

<script>
    export default {
        name: "register",
        data(){
            return {
                name: '',
                email: '',
                confirmation_email: '',
                password: '',
                confirmation_password: ''
            }
        },
        methods:{
            register(){
                let data = {
                    name: this.name,
                    email: this.email,
                    password: this.password
                }
                axios.post('/register', data).then(res => {
                    swal('Success','Register User Success', 'success')
                }).catch(err=>{console.log(err)})
            }
        }
    }
</script>

<style scoped>

</style>
