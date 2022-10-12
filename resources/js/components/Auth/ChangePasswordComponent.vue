<template>
  <section class="large-section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 m-auto">
          <div class="form--bordered">
            <h6 class="form-title-with-border" id="interactWithUser">[ {{ this.messageToTheUser }} ]</h6>

            <div class="input--with-icon input--icon-right">
              <input
                class="input--grey input--squared"
                type="password"
                placeholder="Enter your current password..."
                v-model="form.password"
                @keyup="this.interactWithUserFunction(true,false,false)"
                @focus="this.interactWithUserFunction(true,false,false)"
              />
              <svg class="crumina-icon">
                <use xlink:href="#icon-triangle-arrow"></use>
              </svg>
            </div>

            <div class="input--with-icon input--icon-right medium-padding40">
              <input
                class="input--grey input--squared"
                type="password"
                placeholder="Enter your new password..."
                v-model="form.new_password"
                @keyup="this.interactWithUserFunction(false,true,false)"
                @focus="this.interactWithUserFunction(false,true,false)"
              />
              <svg class="crumina-icon">
                <use xlink:href="#icon-triangle-arrow"></use>
              </svg>
            </div>

            <div class="input--with-icon input--icon-right">
              <input
                class="input--grey input--squared"
                type="password"
                placeholder="Confirm your new password..."
                v-model="form.password_confirmation"
                @keyup="this.interactWithUserFunction(false,false,true)"
                @focus="this.interactWithUserFunction(false,false,true)"
              />
              <svg class="crumina-icon">
                <use xlink:href="#icon-triangle-arrow"></use>
              </svg>
            </div>

            <div
              class="
                universal-btn-wrapper
                d-flex
                justify-content-center
                medium-padding40
              "
            >
              <button class="crumina-button button--yellow button--l">
                Change Password
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      messageToTheUser: "this is an interaction message to the user",
      form:{
        password: null,
        new_password: null,
        password_confirmation: null,
      }
    };
  },

  methods: {


    interactWithUserFunction(currentPassword = false, newPassword = false, confirmPassword = false) {


        if(currentPassword){
            console.log("User interacting with currentPassword: " + this.form.password);
        }
        else if(newPassword){
            console.log("User interacting with newPassword: " + this.form.new_password);
        }
        else {
            console.log("User interacting with confirmPassword: " + this.form.password_confirmation);
        }

    },




  },
};
</script>
