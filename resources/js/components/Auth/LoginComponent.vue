<template>
  <section class="crumina-module crumina-module-slider crumina-main-slider">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->

      <div class="swiper-slide stunning-header-bg5">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 m-auto">
              <a href="/">
                <img loading="lazy" src="/img/logo.png" alt="logo" />
              </a>
              <br /><br />

              <div
                class="alert alert-danger alert-dismissible"
                v-if="this.showErrorsAlert"
              >
                <a
                  href="#"
                  class="close"
                  data-dismiss="alert"
                  aria-label="close"
                  @click.prevent="this.showErrorsAlert = !this.showErrorsAlert"
                  >&times;</a
                >

                <strong>{{ this.messageErrors }}</strong>
              </div>

              <div
                class="alert alert-success alert-dismissible"
                v-if="this.showSuccessAlert"
              >
                <a
                  href="#"
                  class="close"
                  data-dismiss="alert"
                  aria-label="close"
                  @click.prevent="
                    this.showSuccessAlert = !this.showSuccessAlert
                  "
                  >&times;</a
                >

                <strong>{{ this.messageSuccess }}</strong>
              </div>

              <div class="form-item">
                <input
                  class="input--dark input--squared"
                  type="text"
                  placeholder="Enter your email"
                  v-model="form.email"
                  v-bind:disabled="this.disableTextInputs"
                />
              </div>

              <div class="form-item">
                <input
                  class="input--dark input--squared"
                  type="password"
                  placeholder="Enter your password"
                  v-model="form.password"
                  v-bind:disabled="this.disableTextInputs"
                />
              </div>

              <div class="form-item">
                <div class="remember-wrapper text-white">
                    <a v-bind:href="this.registrationLink">
                    <div class="checkbox">
                        <label>Not registered? Create new account</label>
                    </div>
                    </a>
                </div>
              </div>
              <div class="form-item">
                <button
                  type="button"
                  class="crumina-button button--primary button--l w-100"
                  @click.prevent="this.LoginProcessStarted()"
                  v-bind:disabled="this.disableTextInputs"
                >
                  Sign In
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>



  <script>
import axios from "axios";

export default {
  props: ["loginRoute","registrationLink","confirmationLink"],

  data() {
    return {
      form: {
        email: null,
        password: null,
      },

      disableTextInputs: false,

      showSuccessAlert: false,
      messageSuccess: null,

      showErrorsAlert: false,
      messageErrors: null,
    };
  },

  methods: {


    LoginProcessStarted() {
      axios.get("/sanctum/csrf-cookie").then((response) => {
        axios.post(this.loginRoute, this.form)
             .then((response) => {

                this.disableTextInputs = true;
                this.showErrorsAlert = false;
                this.showSuccessAlert = true;
                this.messageSuccess = response.data[0];


                if(!response.data[1]){
                    setInterval(() => {
                window.location.href = this.confirmationLink;
            }, 1800);
                }
                else {
                    setInterval(() => {
                window.location.href = '/';
            }, 2500);
                }

          })
          .catch((error) => {
            this.showErrorsAlert = true;
            this.messageErrors = error.response.data.message;
          });
      });
    },




  },



};
</script>

