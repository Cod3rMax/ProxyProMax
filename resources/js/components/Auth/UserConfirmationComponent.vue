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
                  placeholder="Enter your confirmation code...."
                  v-model="form.confirmation_code"
                  v-bind:disabled="this.disableTextInputs"
                />
              </div>

              <div class="form-item">
                <div class="remember-wrapper text-white">
                  <div class="checkbox">
                    <label
                      >Check your email we have sent you the code....</label
                    >
                  </div>
                </div>
              </div>
              <div class="form-item">
                <button
                  type="button"
                  class="crumina-button button--primary button--l w-100"
                  @click.prevent="this.ConfirmationProcessStarted()"
                  v-bind:disabled="this.disableTextInputs"
                >
                  Confirm account
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
export default {

    props: ["confirmationRoute"],

    data(){
        return {
            form: {
                confirmation_code: null,
            },

            disableTextInputs: false,

            showSuccessAlert: false,
            messageSuccess: null,

            showErrorsAlert: false,
            messageErrors: null,
        }
    },


    methods: {

        ConfirmationProcessStarted(){
            axios.post(this.confirmationRoute, this.form)
            .then(response => {
                console.log(response.data);
                this.disableTextInputs = true;
                this.showErrorsAlert = false;
                this.showSuccessAlert = true;
                this.messageSuccess = response.data[0];

                setInterval(() => {
                window.location.href = '/';
            }, 2500);

            })
            .catch(error => {
                this.showErrorsAlert = true;
                this.messageErrors = error.response.data.message;
            })
        }

    },


};
</script>

