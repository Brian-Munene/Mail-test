<template>
    <div>
        <h3 class="text-center">All Emails</h3><br/>

        <table class="table  table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="test in tests.data" :key="test.id">
                <td>{{ test.name }}</td>
                <td>{{ test.email }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: test.id }}" class="btn btn-warning">Update
                        </router-link>
                        <button class="btn btn-danger" @click="deleteBook(test.id)"> Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
        <pagination :data="tests" @pagination-change-page="getData"></pagination>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                tests: []
            }
        },
        created() {
            this.axios
                .get('http://mail-test-laravel.herokuapp.com/api/tests')
                .then(response => {
                    this.tests = response.data;
                });

            this.getData();
        },
        methods: {
            getData(page = 1) {
            axios.get('http://mail-test-laravel.herokuapp.com/api/tests?page=' + page)
                .then(response => {
                    this.tests = response.data;
                });
        },
            deleteBook(id) {
                this.axios
                    .delete(`http://mail-test-laravel.herokuapp.com/api/tests/${id}`)
                    .then(response => {
                        let i = this.tests.map(item => item.id).indexOf(id); // find index of your object
                        this.tests.splice(i, 1)
                    });
            }
        }
    }
</script>