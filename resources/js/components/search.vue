<template>
    <div>
        <input type="text" v-model="keyword" placeholder="Search using name">
        <ul v-if="Tests.length > 0">
            <li v-for="test in Tests" :key="test.id" v-text="test.email"></li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            keyword: null,
            Tests: []
        };
    },
    watch: {
        keyword(after, before) {
            this.search();
        }
    },
    methods: {
        search() {
            axios.get('http://127.0.0.1:8000/api/tests/search', { params: { keyword: this.keyword } })
                .then(res => this.Tests = res.data)
                .catch(error => {});
        }
    }
}
</script>