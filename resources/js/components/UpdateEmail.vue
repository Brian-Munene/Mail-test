<template>
    <div>
        <h3 class="text-center">Update  Email</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateEmail">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="test.name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" v-model="test.email">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Email</button>
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
        created() {
            this.axios
                .get(`http://127.0.0.1:8000/api/tests/${this.$route.params.id}`)
                .then((response) => {
                    this.test = response.data;
                    console.log(response.data);
                });
        },
        methods: {
            updateEmail() {
                this.axios
                    .post(`http://127.0.0.1:8000/api/tests/${this.$route.params.id}`, this.test)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>