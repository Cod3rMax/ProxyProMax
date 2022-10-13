<template>
  <section class="large-section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 m-auto">
          <div class="form--bordered">
            <h6 class="form-title-with-border" id="interactWithUser" style="font-size: 2.3vmin;">[ {{ this.messageToTheUser }} ]
            </h6>

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
              <button class="crumina-button button--yellow button--l" @click.prevent="this.changePasswordFunction()">
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
import axios from 'axios';
export default {

    props: ["changepasswordRoute"],


    data() {
        return {
            messageToTheUser: "Enter your details below",
            form: {
                password: "",
                new_password: "",
                password_confirmation: "",
            }
        };
    },

  methods: {


    interactWithUserFunction(currentPassword = false, newPassword = false, confirmPassword = false) {

        var userMessage = document.getElementById("interactWithUser").style;

        if(currentPassword){
            console.log("ee")
          if(this.form.password === ""){
            userMessage.color = 'green';
            this.messageToTheUser = "Come on man, enter your actual password";
          }
          else if(this.form.password.trim().length > 3 && this.form.password.trim().length < 7){
            userMessage.color = 'red';
            this.messageToTheUser = "Write a normal password bruuuh! with min 8 chars";
          }
          else if(this.form.password.trim().length >= 8 && this.form.password.trim().length <= 12){
            userMessage.color = 'green';
            this.messageToTheUser = "A password up to 15 chars! as you wish!";
          }
          else if(this.form.password.trim().length > 12 && this.form.password.trim().length < 15){
            userMessage.color = 'orange';
            this.messageToTheUser = "Remember up to 15 max i think yeah";
          }
          else if(this.form.password.trim().length > 15 && this.form.password.trim().length != 15){
            userMessage.color = 'red';
            this.messageToTheUser = "i said up to 15 bro 15 only don't be stupid now!";
          }
          else if(this.form.password.trim().length === 15) {
            userMessage.color = 'green';
            this.messageToTheUser = "I think your password is okay now";
          }

        }




        else if(newPassword){

            if(this.form.new_password === ""){
            userMessage.color = 'green';
            this.messageToTheUser = "Same rules apply :)";
          }
            else if(this.form.new_password.trim().length > 3 && this.form.new_password.trim().length < 7){
                userMessage.color = 'red';
                this.messageToTheUser = "I said same rules 😡 min 8 chars";
            }
            else if(this.form.new_password.trim().length >= 8 && this.form.new_password.trim().length <= 12){
                userMessage.color = 'green';
                this.messageToTheUser = "So yeah up to 15 chars as you wish 😅";
            }
            else if(this.form.new_password.trim().length > 12 && this.form.new_password.trim().length < 15){
                userMessage.color = 'orange';
                this.messageToTheUser = "Remember 😎 up to 15 max i think yeah";
            }
            else if(this.form.new_password.trim().length > 15 && this.form.new_password.trim().length != 15){
                userMessage.color = 'red';
                this.messageToTheUser = "I said up to 15 you **** dumb 😡";
            }
            else if(this.form.new_password.trim().length === 15) {
                userMessage.color = 'green';
                this.messageToTheUser = "I think your password is okay now 🙃";
            }

        }




        else {

            if(this.form.new_password === this.form.password_confirmation){
                userMessage.color = 'green';
                this.messageToTheUser = "niiiice, good to go 😎";
            }
            else if(this.form.password_confirmation === ""){
                userMessage.color = 'green';
                this.messageToTheUser = "I think you know what to do 😎";
            }
            else if(this.form.password_confirmation.trim().length > 3 && this.form.password_confirmation.trim().length < 7){
                    userMessage.color = 'red';
                    this.messageToTheUser = "Just confirm your **** password 😡";
            }
            else if(this.form.password_confirmation.trim().length >= 8 && this.form.password_confirmation.trim().length <= 12){
                    userMessage.color = 'green';
                    this.messageToTheUser = "Is your new password up to 15 chars? 😅";
            }
            else if(this.form.password_confirmation.trim().length > 12 && this.form.password_confirmation.trim().length < 15){
                    userMessage.color = 'orange';
                    this.messageToTheUser = "Remember 😎 up to 15 max i think yeah";
            }
            else if(this.form.password_confirmation.trim().length > 15 && this.form.password_confirmation.trim().length != 15){
                    userMessage.color = 'red';
                    this.messageToTheUser = "I said up to 15 you driving me crazy **** 😡";
            }
            else if(this.form.password_confirmation.trim().length === 15 && this.form.new_password !== this.form.password_confirmation) {
                    userMessage.color = 'red';
                    this.messageToTheUser = "Cofirm your **** password 🤢";
            }


        }



    },




    changePasswordFunction(){

        axios.post(this.changepasswordRoute, this.form)
            .then(response => {
                document.getElementById("interactWithUser").style.color = 'green';
                this.messageToTheUser = response.data + "😚";
                this.form = "";
            })
            .catch(error => {
                document.getElementById("interactWithUser").style.color = 'red';
                this.messageToTheUser = error.response.data.message;
            })

    }





  },







};
</script>
