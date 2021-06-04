let Profile = Vue.component('Profile', {
    template: `
      <main>
      <div class="entity" id="profile">
        <div class="entity-banner">
        </div>
        <img>
        <div class="entity-details">
          <h3>Marc</h3>
          <p class="entity-description">Hey ! Je suis guitariste et chanteur.</p>
          <ul class="entity-socials">
            <li><i class="fab fa-instagram"></i>marcxler</li>
          </ul>
        </div>
      </div>
      </main>
    `,
    data() {
        return {}
    },
    mounted() {
    },
    methods: {}
})