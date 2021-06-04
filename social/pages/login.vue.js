let Login = Vue.component('Login', {
    template: `
      <main>
      <div id="login">
        <h1 style="display: block;
text-align: center">Se connecter</h1>
        <img src="images/user-bust.png" alt="User bust">
        <form id="login-form">
          <label for="email"></label>
          <input id="email" placeholder="E-mail" style="margin-bottom: 0.5rem">
          <label for="pass"></label>
          <input id="pass" placeholder="Mot de passe">
        </form>
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