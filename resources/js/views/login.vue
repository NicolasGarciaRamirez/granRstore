<template>
    <section>
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div>
                <h3>Login</h3>
            </div>
            <form @submit.prevent="login">
                <div class="form-group">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="text-center mt-2">
                        <button type="submit" class="btn btn-danger">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</template>

<script>
    export default {
        name: "login",
        data(){
            return {
                email: '',
                password: ''
            }
        },
        methods:{
            async login(){
                let data = {
                    email: this.email,
                    password: this.password
                }
                await axios.post('/login', data).then(res=>{
                    alert('success')
                    console.log(res)
                }).catch(err=>{
                    alert('error'+err)
                })
            }
        }
    }
</script>

<style scoped>

</style>
