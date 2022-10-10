<template>
   <section class="small-section-padding section-bg1">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                            <h2 class="align-center">Free Proxy List</h2>
                            <br>
                        </div>
                </div>

                <button class="btn" data-clipboard-text="Just">
    Copy to clipboard
</button>

                    <div>
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
                                    <td><button v-bind:data-clipboard-text="proxy['ProxyIP']"  class="btn crumina-button button--yellow" @click.prevent="this.CopyToClipboard()">Copy</button></td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                    </div>

                    <div class="d-flex justify-content-center small-section-padding font-weight-bold">
                    You are on page: {{ this.page }}
                </div>

                <div class="universal-btn-wrapper d-flex justify-content-center">
                    <button v-bind:disabled="this.disablePrevPageButton" class="crumina-button button--yellow button--l" @click.prevent="this.PrevPage()">Previous Page</button>
                    <button v-bind:disabled="this.disableNextPageButton" class="crumina-button button--yellow button--l" @click.prevent="this.NextPage()">Next Page</button>
                </div>

                </section>
</template>



<script>
import ClipboardJS from 'clipboard';
var clipboard = new ClipboardJS('.btn');
export default {

    props: ["allproxiesRoute"],


    data(){

        return {

            proxies: null,

            page: 1,
            totalPages: null,
            disableNextPageButton: false,
            disablePrevPageButton: true,
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

            })
            .catch(error =>{
                console.log("Error: " + error.response.data.message);
            })

        },


        CopyToClipboard(proxy){
            console.log(proxy);
        },


        NextPage(){
            this.page++;
        },


        PrevPage(){
            this.page--;
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
