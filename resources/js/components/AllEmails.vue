<template>
    <div>
        <h3 class="text-center">All Emails</h3><br/>

        <div class="card-body">
                  <search-component></search-component>
        </div>

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
                        <button class="btn btn-danger" @click="deleteTest(test.id)"> Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
        <pagination :data="tests" @pagination-change-page="getData"></pagination>
        <div class="float-right">
        <button type="button" class="btn btn-success" @click="sendMail()">Send Emails</button>
    </div>
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

            this.getData();
        },
        methods: {
            getData(page = 1) {
            axios.get('http://127.0.0.1:8000/api/tests?page=' + page)
                .then(response => {
                    this.tests = response.data;
                });
        },
            deleteTest(id) {
                this.axios
                    .delete(`http://127.0.0.1:8000/api/tests/${id}`)
                    .then(response => {
                        let i = this.tests.map(item => item.id).indexOf(id); // find index of your object
                        this.tests.splice(i, 1)
                    });
            },
            sendMail(){
                this.axios.get(`http://127.0.0.1:8000/api/send/mail`)
                        .then(response => {
                            alert(response)
                        });
            },
        }
    }
</script>