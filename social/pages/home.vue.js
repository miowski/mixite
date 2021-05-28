let Accueil = Vue.component('Accueil', {
    template:`
    <div class="feed">
        <div class="post">
            <h3 class="title">Premier post !</h3>
            <p class="description">Ceci est le premier post de Mixite.</p>
            <img class="media">
        </div>
    </div>
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