let Accueil = Vue.component('Accueil', {
    template: `
      <main>
      <div class="feed">
        <div class="post">
          <h3>Cherche claviste</h3>
          <sub>Marc Grandin</sub>
          <p>Je cherche un claviste pour accompagner mes performances à la basse.
            Bonne maîtrise préférable. Si vous avez des synthés, c'est encore mieux !
            Contactez moi au 06 01 02 03 04</p>
        </div>
        <div class="post">
          <h3>Guitariste à Reims</h3>
          <sub>Georges G</sub>
          <p>Bonjour, je cherche un guitariste sur Reims. Je chante et cela me serait d'une grande aide.</p>
        </div>
        <div class="post">
          <h3>Formation de groupe sur Colmar</h3>
          <sub>Antoine Martin</sub>
          <p>Bonjour, je suis batteur et je cherche des gens avec qui monter un groupe.
            N'hésitez pas si vous êtes de colmar ou alentours !</p>
        </div>
      </div>
      <!-- <div v-for="post in postList" :key="post.id" class="feed">
          <div class="post">
              <h3 class="title">{{ post.title }}</h3>
              <sub>{{ post.publisher }}</sub>
              <p class="description">{{ post.description }}</p>
          </div>
      </div> -->
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