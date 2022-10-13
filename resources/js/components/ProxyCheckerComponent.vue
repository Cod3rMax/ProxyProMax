<template>
    <div class="main-content-wrapper">

        <section class="crumina-stunning-header stunning-header-bg1 pb60">
            <div class="container">
                <div class="row justify-content-center align-center">
                    <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label for="descr" class="row justify-content-center font-weight-bold">Enter your Proxy List below:</label>

                            <div class="form-item">
                                <textarea v-model="this.proxyList" @keyup="this.formatProxyList()" id="list" style="resize: none;" class="input--white input--squared" placeholder="Enter your proxy list here" rows="11"></textarea>
                            </div>

                            <div class="universal-btn-wrapper">
                                <button class="crumina-button button--orange button--l">Start Checking</button>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div id="our-story" class="crumina-breadcrumbs breadcrumbs--dark-themes">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul class="breadcrumbs">
                            <li class="breadcrumbs-item">
                                <a href="">Home</a>
                            </li>
                            <li class="breadcrumbs-item active">
                                <span>Proxy Checker Result</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <section class="small-section-padding section-bg1">
            <div class="container">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 align-center mb-5 ml-auto mr-auto">
                    <h2>Proxy Checker Result</h2>
                </div>


                <table class="pricing-table--style2 align-center">
                    <thead>
                        <tr>
                            <th>Proxy</th>
                            <th>Country</th>
                            <th>Protocol</th>
                            <th>Blacklist</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="font-weight-bold">
                            <td>zdadzad</td>
                            <td>zdadzad</td>
                            <td>zdadzad</td>
                            <td>zdadzad</td>
                            <td>zdadzad</td>
                        </tr>
                    </tbody>
                </table>



            </div>
        </section>
    </div>

</template>


<script>
export default {
    data(){
        return {
            proxyList : [],
        }
    },


    methods: {

        formatProxyList(){
            this.proxyList = [];
            var proxy_pattern = new RegExp('((?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?))(?![\\d])(?::|\\s+)(\\d+)', "gi");
            var i = 0;
            Array.prototype.getUnique = function () {
                var u = {}, a = [];
                for (var i = 0, l = this.length; i < l; ++i) {
                    if (u.hasOwnProperty(this[i])) {
                        continue;
                    }
                    a.push(this[i]);
                    u[this[i]] = 1;
                }
                return a;
            }
            var inputlist = document.getElementById("list");
            var proxies = inputlist.value;
            var m = null;
            while ((m = proxy_pattern.exec(proxies)) != null) {
                this.proxyList.push(m[1] + ':' + m[2]);
            }
            this.proxyList = this.proxyList.getUnique();
            this.proxyList = this.proxyList.join('\n');
        },

    },



}
</script>
