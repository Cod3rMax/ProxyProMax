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
                                <button @click.prevent="this.beforeStartCheckingProxies();" class="crumina-button button--orange button--l">Start Checking</button>
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
                        <tr class="font-weight-bold" v-for="(proxy, key) in this.proxiesToBeChecked" :key="key">
                            <td>{{ proxy.ProxyIP }}</td>
                            <td>{{ proxy.Country }}</td>
                            <td>{{ proxy.Protocol }}</td>
                            <td>{{ proxy.Blacklist }}</td>
                            <td>{{ proxy.Status }}</td>
                        </tr>
                    </tbody>
                </table>



            </div>
        </section>
    </div>

</template>


<script>
export default {

    props: ["proxycheckerRoute"],
    data(){
        return {
            proxyProtocol: ['HTTPS','HTTP','SOCKS5','SOCKS4','SOCKS4A'],
            proxyList : [],
            tempProxyList: [],
            tempProxyListCounter: 0,
            proxiesToBeChecked: [],
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

            // Here to get unique data of proxies entered by user
            this.proxyList = this.proxyList.getUnique();
            // Here to store the unique proxies into temp variable
            this.tempProxyList = this.proxyList;
            // Here to join the proxies that will be shown to the user
            this.proxyList = this.proxyList.join('\n');

        },




        // Here to convert the proxy list that will be checked to an object before starting the checking

        beforeStartCheckingProxies() {

            // Clean the proxies before starting a new check
            this.proxiesToBeChecked = [];

            this.tempProxyList.forEach(tempProxy => {

                this.proxiesToBeChecked.push({
                    ProxyID: this.tempProxyListCounter,
                    ProxyIP: tempProxy,
                    Country: 'Loading...',
                    Protocol: 'Loading...',
                    Blacklist: 'Loading...',
                    Status: 'Loading...',
                });

                this.tempProxyListCounter++;

            });

            this.tempProxyListCounter = 0;
            this.startCheckingProxies();
        },


        // Here to start checking the proxy list

        startCheckingProxies(){

            //console.log("Checking has been started");

            this.proxiesToBeChecked.forEach(proxy => {

                this.intermidateCheckingProxies(proxy.ProxyID, proxy.ProxyIP, this.proxyProtocol[0]);


                c//onsole.log("Remove one line from the proxies");
                this.removeOneLineFromTheProxyList();

            });

        },



        intermidateCheckingProxies(ProxyID, ProxyIP, Protocol){


            axios.post(this.proxycheckerRoute, { ProxyID: ProxyID, ProxyIP: ProxyIP, ProxyProtocol:  Protocol})
                    .then(response => {

                        if (!response.data.Response['Expression_Status'] && response.data.Protocol == "HTTPS") {
                            // console.log('DIE----->: ' + this.proxiesToBeChecked[response.data.ProxyID].ProxyIP + " Die Protocol----->: " + response.data.Protocol);
                            // console.log("Sending---->: " + ProxyIP + " To be checked again with protocol: " + this.proxyProtocol[1]);
                            this.intermidateCheckingProxies(ProxyID, ProxyIP, this.proxyProtocol[1]);
                        }
                        else if (!response.data.Response['Expression_Status'] && response.data.Protocol == "HTTP") {
                            // console.log('DIE----->: ' + this.proxiesToBeChecked[response.data.ProxyID].ProxyIP + " Die Protocol----->: " + response.data.Protocol);
                            // console.log("Sending---->: " + ProxyIP + " To be checked again with protocol: " + this.proxyProtocol[2]);
                            this.intermidateCheckingProxies(ProxyID, ProxyIP, this.proxyProtocol[2]);
                        }
                        else if (!response.data.Response['Expression_Status'] && response.data.Protocol == "SOCKS5") {
                            // console.log('DIE----->: ' + this.proxiesToBeChecked[response.data.ProxyID].ProxyIP + " Die Protocol----->: " + response.data.Protocol);
                            // console.log("Sending---->: " + ProxyIP + " To be checked again with protocol: " + this.proxyProtocol[3]);
                            this.intermidateCheckingProxies(ProxyID, ProxyIP, this.proxyProtocol[3]);
                        }
                        else if (!response.data.Response['Expression_Status'] && response.data.Protocol == "SOCKS4") {
                            // console.log('DIE----->: ' + this.proxiesToBeChecked[response.data.ProxyID].ProxyIP + " Die Protocol----->: " + response.data.Protocol);
                            // console.log("Sending---->: " + ProxyIP + " To be checked again with protocol: " + this.proxyProtocol[4]);
                            this.intermidateCheckingProxies(ProxyID, ProxyIP, this.proxyProtocol[4]);
                        }
                        else if (!response.data.Response['Expression_Status'] && response.data.Protocol == "SOCKS4A") {
                            // console.log("checked with socks4A and die so proxy die");
                            this.ProxyStatus(response.data.ProxyID, response.data.ProxyDetails['country'], 'N/A', 'N/A', 'Dead');
                        }
                        else {
                            // console.log("Proxy is LIVE and no need for more checking");
                            this.ProxyStatus(response.data.ProxyID, response.data.ProxyDetails['country'], response.data.Response['Protocol'], response.data.Response['Blacklist'], 'Live');
                        }

                    })
                    .catch(error => {
                        console.log("Error: " + error.response.data)
                    })


        },


        // This function should update the live proxies.
        ProxyStatus(ProxyID, ProxyCountry, ProxyProtocol, ProxyBlacklist, ProxyStatus){
                            this.proxiesToBeChecked[ProxyID].Country    = ProxyCountry;
                            this.proxiesToBeChecked[ProxyID].Protocol   = ProxyProtocol;
                            this.proxiesToBeChecked[ProxyID].Blacklist  = ProxyBlacklist;
                            this.proxiesToBeChecked[ProxyID].Status     = ProxyStatus;
        },



        removeOneLineFromTheProxyList() {
            this.proxyList = this.proxyList.split("\n");
            this.proxyList.splice(0, 1);
            this.proxyList = this.proxyList.join("\n")
        },


    },

}
</script>
