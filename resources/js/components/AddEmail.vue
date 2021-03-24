<template>
    <div>
        <h3 class="text-center">Add Emails</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addEmail">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="test.name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" v-model="test.email">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Email</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                test: {}
            }
        },
        methods: {
            addEmail() {

                this.axios
                    .post('http://mail-test-laravel.herokuapp.com/api/tests/', this.test, {
                        // headers: {
                        //    "Access-Control-Allow-Origin": "*",
                        //     "Access-Control-Allow-Methods": "GET, POST, PATCH, PUT, DELETE, OPTIONS",
                        //     "Access-Control-Allow-Headers": "Origin, Content-Type, X-Auth-Token"
                        //     }
                    })
                    .then(response => (
                        this.$router.push({name: 'home'})
                        // console.log(response.data)
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>