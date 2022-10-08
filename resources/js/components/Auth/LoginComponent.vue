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
                <br><br>


                <div class="form-item">
                  <input
                    class="input--dark input--squared"
                    type="text"
                    placeholder="Enter your email"
                    v-model="form.email"
                  />
                </div>

                <div class="form-item">
                  <input
                    class="input--dark input--squared"
                    type="password"
                    placeholder="Enter your password"
                    v-model="form.password"
                  />
                </div>

                <div class="form-item">
                  <div class="remember-wrapper text-white">
                    <div class="checkbox">
                      <label>Not registered? Create new account</label>
                    </div>
                  </div>
                </div>
                <div class="form-item">
                  <button
                    type="button"
                    class="crumina-button button--primary button--l w-100"
                    @click.prevent="this.LoginProcessStarted()"
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
import axios from 'axios';

  export default {

    props: ['loginRoute'],

    data(){
        return {

            form: {
                email: null,
                password: null,
            }

        }
    },




    methods: {

        LoginProcessStarted(){

             axios.post(this.loginRoute, this.form)
            .then(response => {
                console.log(response.data)
            })
            .catch(error => {
                console.log("Error: " + error)
            })

        }

    },




  };
  </script>

