<template>
  <div class="footer-subscribe-panel">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mb-4 mb-lg-0">
          <h5 class="footer-subscribe-panel-title text-white">
            SUBSCRIBE TO OUR NEWSLETTER
          </h5>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mb-4 mb-lg-0">
          <span class="footer-subscribe-panel-subtitle">
            <span class="font-weight-bold"
              >Subscribe now and get free proxies list directly sent to your
              email.
            </span></span
          >
        </div>
        <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12 mb-0 mb-lg-0">
          <div class="input-btn--inline">
            <input
              class="input--dark"
              type="text"
              placeholder="Enter your email"
              v-model="form.email"
            />
            <button
              type="button"
              class="crumina-button button--lime button--l"
              @click="this.SubscribeUser()"
            >
              Subscribe
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        email: null,
      },
    };
  },

  methods: {
    SubscribeUser() {
      axios
        .post("api/Subscribe", this.form)
        .then((response) => {
            console.log(response.data)
          //console.log(response.data[0]);
          //this.form.email = null
        })
        .catch((error) => {
          console.log("error: " + Object.values(error.response.data));
        });
    },
  },
};
</script>
