<template>
    <section class="small-section-padding section-bg1">
                 <div class="container">
                     <div class="d-flex justify-content-center">
                         <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                             <h2 class="align-center">USA Free Proxy List</h2>
                             <br>
                         </div>
                 </div>






                     <div v-if="!this.isUserLogged && this.page <= 4">
                         <table class="table table-responsive-lg table--style3 align-center">
                             <thead class="thead-dark">
                                 <tr>
                                     <th scope="col">#</th>
                                     <th scope="col">Proxy</th>
                                     <th scope="col">Country</th>
                                     <th scope="col">Protocol</th>
                                     <th scope="col">Status</th>
                                     <th scope="col">Last Checked</th>
                                     <th scope="col">Copy Proxy</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr class="font-weight-bold align-center" v-for="(proxy, key) in this.proxies" :key="key">
                                     <th scope="row">{{ key + 1 }}</th>
                                     <td>{{ proxy['ProxyIP'] }}</td>
                                     <td>{{ proxy['Country'] }}</td>
                                     <td>{{ proxy['Protocol'] }}</td>
                                     <td><span v-bind:class="[proxy['Blacklisted'] ? 'label-category label--red' : 'label-category  label--green']">{{ proxy['Blacklisted'] ? 'BLACKLISTED' : 'CLEAN' }}</span></td>
                                     <td>{{ proxy['created_at'] }}</td>
                                     <td><button v-bind:id="'CopyButton'+key" v-bind:data-clipboard-text="proxy['ProxyIP']"  class="btn crumina-button button--yellow" @click.prevent="this.CopyToClipboard(proxy['ProxyIP'],'CopyButton'+key)">Copy</button></td>
                                 </tr>
                             </tbody>

                         </table>
                     </div>





                     <div v-else-if="this.isUserLogged">
                         <table class="table table-responsive-lg table--style3 align-center">
                             <thead class="thead-dark">
                                 <tr>
                                     <th scope="col">#</th>
                                     <th scope="col">Proxy</th>
                                     <th scope="col">Country</th>
                                     <th scope="col">Protocol</th>
                                     <th scope="col">Status</th>
                                     <th scope="col">Last Checked</th>
                                     <th scope="col">Copy Proxy</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr class="font-weight-bold align-center" v-for="(proxy, key) in this.proxies" :key="key">
                                     <th scope="row">{{ key + 1 }}</th>
                                     <td>{{ proxy['ProxyIP'] }}</td>
                                     <td>{{ proxy['Country'] }}</td>
                                     <td>{{ proxy['Protocol'] }}</td>
                                     <td><span v-bind:class="[proxy['Blacklisted'] ? 'label-category label--red' : 'label-category  label--green']">{{ proxy['Blacklisted'] ? 'BLACKLISTED' : 'CLEAN' }}</span></td>
                                     <td>{{ proxy['created_at'] }}</td>
                                     <td><button v-bind:id="'CopyButton'+key" v-bind:data-clipboard-text="proxy['ProxyIP']"  class="btn crumina-button button--yellow" @click.prevent="this.CopyToClipboard(proxy['ProxyIP'],'CopyButton'+key)">Copy</button></td>
                                 </tr>
                             </tbody>

                         </table>
                     </div>






                     <div v-else style="cursor: pointer;" @click.prevent="this.RedirectToLoginFunction()">
                     <div class="CenterLoginRequired"><span style="color: red">Login</span> is required to continue</div>
                         <table class="table table-responsive-lg table--style3 align-center blurMyTable">
                             <thead class="thead-dark">
                                 <tr>
                                     <th scope="col">#</th>
                                     <th scope="col">Proxy</th>
                                     <th scope="col">Country</th>
                                     <th scope="col">Protocol</th>
                                     <th scope="col">Status</th>
                                     <th scope="col">Last Checked</th>
                                     <th scope="col">Copy Proxy</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <template v-for="index in 10" :key="index">
                                 <tr class="font-weight-bold align-center" v-for="(proxy, key) in this.proxies" :key="key">
                                     <th scope="row">{{ key + 1 }}</th>
                                     <td>{{ proxy['ProxyIP'] }}</td>
                                     <td>{{ proxy['Country'] }}</td>
                                     <td>{{ proxy['Protocol'] }}</td>
                                     <td><span v-bind:class="[proxy['Blacklisted'] ? 'label-category label--red' : 'label-category  label--green']">{{ proxy['Blacklisted'] ? 'BLACKLISTED' : 'CLEAN' }}</span></td>
                                     <td>{{ proxy['created_at'] }}</td>
                                     <td><button v-bind:id="'CopyButton'+key" v-bind:data-clipboard-text="proxy['ProxyIP']"  class="btn crumina-button button--yellow" @click.prevent="this.CopyToClipboard(proxy['ProxyIP'],'CopyButton'+key)">Copy</button></td>
                                 </tr>
                                 </template>
                             </tbody>

                         </table>
                     </div>




                     </div>

                     <div class="d-flex justify-content-center small-section-padding font-weight-bold">
                     You are on page: {{ this.page }}
                 </div>

                 <div class="universal-btn-wrapper d-flex justify-content-center">
                     <button v-bind:disabled="this.disablePrevPageButton" class="crumina-button button--yellow button--l" @click.prevent="this.PrevPage()">Previous Page</button>
                     <button v-bind:hidden="this.showLoginButton" v-bind:disabled="this.disableNextPageButton" class="crumina-button button--yellow button--l" @click.prevent="this.NextPage()">Next Page</button>
                     <button v-bind:hidden="!this.showLoginButton" class="crumina-button button--dark button--l" @click.prevent="this.RedirectToLoginFunction()">Login</button>
                 </div>

                 </section>
 </template>



 <script>
 import ClipboardJS from 'clipboard';
 var clipboard = new ClipboardJS('.btn');
 export default {

     props: ["allproxiesRoute","isUserLogged","loginRoute"],


     data(){

         return {

             proxies: null,

             page: 1,
             totalPages: null,
             disableNextPageButton: false,
             disablePrevPageButton: true,
             showLoginButton: false,
         }

     },


     methods: {

         GetProxyListFunction(){
             //At the entrance of the page the prev button will be disabled.
             this.page > 1 ? this.disablePrevPageButton = false : this.disablePrevPageButton = true;

             axios.get(this.allproxiesRoute+ "?page="+this.page)
             .then(response => {
                 this.proxies = response.data.data;
                 this.totalPages = response.data.last_page;

                 // here if we are at the last page the next button will be disabled.
                 // if we are not at the last page it will be enabled.
                 this.page === this.totalPages ? this.disableNextPageButton = true : this.disableNextPageButton = false;

                 //If the user not loggedin, and arrive to page more than 4 so disable next button and show instead a login button
                 !this.isUserLogged && this.page > 4 ? (this.disableNextPageButton = true , this.showLoginButton = true) : this.showLoginButton = false;

             })
             .catch(error =>{
                 console.log("Error: " + error.response.data.message);
             })

         },


         CopyToClipboard(proxy,elementID){
             this.Notification("success",proxy + " Copied", 1700);
                 document.getElementById(elementID).textContent = "Copied...";

             setInterval(() => {
                 document.getElementById(elementID).textContent = "Copy";
             }, 2000);
         },


         NextPage(){
             this.page++;
         },


         PrevPage(){
             this.page--;
         },

         RedirectToLoginFunction(){
             window.location.href = this.loginRoute;
         },


     },


     watch:{
         page: function(){
             this.GetProxyListFunction();
         }
     },

 mounted(){
     this.GetProxyListFunction();
 }

 }
 </script>

 <style>
 .blurMyTable {
     position: absolute;
     background: rgba(197, 139, 139, 0.5);
     filter:blur(12px);
     -o-filter:blur(12px);
     -ms-filter:blur(12px);
     -moz-filter:blur(12px);
     -webkit-filter: blur(12px);
     content: '';
     left: 0;
     top: 0;
     z-index: 1;
     width: 100%;
     height: 100%;
     position: relative;
     z-index: 2;
 }

 .CenterLoginRequired{
     position: absolute;
     top: 37%;
     left: 50%;
     transform: translate(-50%,-50%);
     text-decoration: none;
     font-weight: bold;
     font-size: 2.0vmax;
     color: black;
     text-shadow: 1px 1px yellow;
 }
 </style>
