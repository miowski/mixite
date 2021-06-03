let Contact = Vue.component('Contact', {
    template: `
      <main class="contact">
      <h1>Notre équipe</h1>
      <div class="contact-info">
        <div class="contact-profile" id="eva">
          <img src="images/contact/eva.jpg" alt="Eva Bourquin">
          <h2>Eva Bourquin</h2>
          <h3>Design</h3>
          <a href="mailto:eva.bou.ebou@gmail.com"></a>
        </div>
        <div class="contact-profile" id="maxence">
          <img src="images/contact/max.jpg" alt="Maxence Guichard">
          <h2>Maxence Guichard</h2>
          <h3>Communication et marketing</h3>
          <a href="mailto:maxenceguichard974@gmail.com"></a>
        </div>
        <div class="contact-profile" id="phil">
          <img src="images/contact/phil.jpg" alt="Phil Varret">
          <h2>Phil Varret</h2>
          <h3>Intégration web</h3>
          <a href="mailto:philemon.varret@gmail.com"></a>
        </div>
      </div>
      <div id="intro-overlay">
        <div id="intro-background">
          <p style="display: none">not blank</p>
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