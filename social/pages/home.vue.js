let Accueil = Vue.component('Accueil', {
    template: `
    <main>
    <div class="feed">
        <div class="post">
            <h3 class="title">Premier post !</h3>
            <p class="description">Ceci est le premier post de Mixite.</p>
        </div>
    </div>
    <div class="feed">
        <div class="post">
            <h3 class="title">Premier post !</h3>
            <p class="description">Ceci est le premier post de Mixite.</p>
        </div>
    </div>
    </main>
`,
    data() {
        return {
            postList: []
        }
    },
    mounted() {
        axios.get('http://localhost/mixite/mixite-api/listPosts.php')
            .then(response => {
                this.postList = response.data;
                console.log("Post list : ", this.postList)
            })
    },
    methods: {}
})