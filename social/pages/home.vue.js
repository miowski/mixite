let Accueil = Vue.component('Accueil', {
    template: `
    <main>
    <div v-for="post in postList" :key="post.id" class="feed">
        <div class="post">
            <h3 class="title">{{ post.title }}</h3>
            <sub>{{ post.publisher }}</sub>
            <p class="description">{{ post.description }}</p>
        </div>
    </div>
    </main>
`,
    data() {
        return {
            postList: [],
            publisherList: []
        }
    },
    mounted() {
        axios.get('http://localhost/mixite/mixite-api/controllers/listPosts.php')
            .then(response => {
                this.postList = response.data;
                console.log("Post list : ", this.postList)
            })
    },
    methods: {}
})