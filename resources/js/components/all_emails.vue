<template>
    <div>
        <h3 class="text-center">All Emails</h3><br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                
            </tr>
            </thead>
            <tbody>
            <tr v-for="test in books" :key="test.id">
                <td>{{ test.name }}</td>
                <td>{{ test.email }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: test.id }}" class="btn btn-warning">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deleteBook(test.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                books: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/tests')
                .then(response => {
                    this.tests = response.data;
                });
        },
        methods: {
            deleteBook(id) {
                this.axios
                    .delete(`http://localhost:8000/api/test/${id}`)
                    .then(response => {
                        let i = this.tests.map(item => item.id).indexOf(id); // find index of your object
                        this.tests.splice(i, 1)
                    });
            }
        }
    }
</script>