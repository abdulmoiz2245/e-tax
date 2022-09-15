<x-base-layout>
    <style>
        table thead tr {
            height: 60px;
            background: transparent;
        }

        table {
            table-layout: fixed;
        }

        .tbody tr:hover {
            background-color: transparent;
        }

        table {
            min-width: 800px;
            overflow-x: auto;
        }

        #transaction_table tbody tr td {
            padding-top: 18px;
            padding-bottom: 18px;

        }
    </style>

    <div class="d-md-flex justify-content-between" style="margin-bottom: 60px; margin-top:7%">
        <div>
            <h1 class="dash-title">Markets Prices</h1>
        </div>

    </div>
    <div class="d-md-flex justify-content-between" style="margin-bottom: 12px;">
        <div class="align-self-center">
            <p class="f-16-fig " style="color:#6F6F6F">Updated 4 minutes ago</p>
        </div>
        <div>
            <div class="form__group" style="
                            position: relative;
                            padding-top:0px;
                            max-width: 200px;
                            margin-right:12px;
                            margin-bottom:12px;
                            ">

                <svg style="position: absolute;top: 12px;left: 12px;" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_150_954)">
                        <path d="M18.031 16.617L22.314 20.899L20.899 22.314L16.617 18.031C15.0237 19.3082 13.042 20.0029 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20.0029 13.042 19.3082 15.0237 18.031 16.617ZM16.025 15.875C17.2941 14.5699 18.0029 12.8204 18 11C18 7.132 14.867 4 11 4C7.132 4 4 7.132 4 11C4 14.867 7.132 18 11 18C12.8204 18.0029 14.5699 17.2941 15.875 16.025L16.025 15.875Z" fill="#BFBFBF" />
                    </g>
                    <defs>
                        <clipPath id="clip0_150_954">
                            <rect width="24" height="24" fill="white" />
                        </clipPath>
                    </defs>
                </svg>


                <input type="text" placeholder="Find Wallet" class="form__field" value="" style="
                    padding-left: 45px;
                    padding-right: 15px;
                    border: 0px;
                    background: #fff;
                ">
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body" style="overflow-x: auto;">


            <table id="transaction_table">
                <thead>
                    <tr>
                        <td>
                            <p class="f-20-fig-questrial text-dark">Coin</p>

                        </td>


                        <td>
                            <p class="f-20-fig-questrial text-dark">Market Cup</p>

                        </td>

                        <td>
                            <p class="f-20-fig-questrial text-dark">Price</p>

                        </td>

                        <td>
                            <p class="f-20-fig-questrial text-dark">Volume</p>

                        </td>

                        <td>
                            <p class="f-20-fig-questrial text-dark">Percent</p>

                        </td>

                        <td>
                            <p class="f-20-fig-questrial text-dark">24h statistics</p>
                        </td>
                    </tr>
                </thead>
                <tbody class="tbody">
                    <tr>
                        <td>
                            <div class="icon d-md-flex">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_309_98)">
                                        <path d="M23.6397 14.9029C22.0371 21.3315 15.5259 25.2438 9.0965 23.6407C2.6698 22.038 -1.24254 15.5265 0.360847 9.09837C1.96283 2.66903 8.47399 -1.24361 14.9014 0.359081C21.3303 1.96177 25.2424 8.47404 23.6396 14.903L23.6397 14.9029H23.6397Z" fill="#F7931A" />
                                        <path d="M17.2915 10.2903C17.5304 8.69337 16.3146 7.83495 14.6521 7.2623L15.1914 5.09911L13.8746 4.771L13.3496 6.87723C13.0034 6.79089 12.6479 6.70954 12.2945 6.62889L12.8234 4.50875L11.5074 4.18063L10.9678 6.34312C10.6813 6.2779 10.3999 6.21344 10.1269 6.14551L10.1285 6.13871L8.31258 5.68525L7.96229 7.09168C7.96229 7.09168 8.93925 7.31562 8.91866 7.3294C9.45189 7.46249 9.54832 7.81548 9.53231 8.09526L8.91796 10.5596C8.95467 10.569 9.0023 10.5825 9.05486 10.6036C9.01092 10.5927 8.96417 10.5808 8.91567 10.5691L8.05455 14.0214C7.98939 14.1834 7.82398 14.4265 7.45117 14.3342C7.46437 14.3533 6.4941 14.0954 6.4941 14.0954L5.84033 15.6027L7.55394 16.0299C7.87272 16.1098 8.18512 16.1934 8.49277 16.2721L7.94786 18.4601L9.26314 18.7882L9.80276 16.6234C10.1621 16.721 10.5108 16.811 10.8522 16.8958L10.3144 19.0504L11.6312 19.3785L12.1761 17.1946C14.4215 17.6195 16.1099 17.4482 16.8205 15.4172C17.3932 13.782 16.792 12.8389 15.6107 12.2238C16.4711 12.0254 17.1192 11.4595 17.292 10.2905L17.2916 10.2902L17.2915 10.2903ZM14.2829 14.5091C13.876 16.1443 11.1229 15.2604 10.2302 15.0387L10.9533 12.14C11.8459 12.3628 14.7083 12.8038 14.283 14.5091H14.2829ZM14.6902 10.2666C14.319 11.754 12.0275 10.9983 11.2842 10.813L11.9397 8.18406C12.6831 8.36936 15.0769 8.71518 14.6903 10.2666H14.6902Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_309_98">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>


                                <span class="f-16-fig" style="padding-left:10px">BTC ( Bitcoin )</span>

                            </div>
                        </td>
                        <td>
                            <p class="f-16-fig text-dark">$452.07B</p>

                        </td>
                        <td>
                            <p class="f-16-fig text-dark">$23,638.89</p>
                        </td>
                        <td>
                            <p class="f-16-fig text-dark">$30.2B</p>
                        </td>

                        <td>
                            <p class="f-16-fig text-danger">-1.63%</p>
                        </td>

                        <td>
                            <div class="line-chart">
                                <div class="aspect-ratio">
                                    <canvas id="line-chart-transaction_1" height="49"></canvas>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="icon d-md-flex">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_309_98)">
                                        <path d="M23.6397 14.9029C22.0371 21.3315 15.5259 25.2438 9.0965 23.6407C2.6698 22.038 -1.24254 15.5265 0.360847 9.09837C1.96283 2.66903 8.47399 -1.24361 14.9014 0.359081C21.3303 1.96177 25.2424 8.47404 23.6396 14.903L23.6397 14.9029H23.6397Z" fill="#F7931A" />
                                        <path d="M17.2915 10.2903C17.5304 8.69337 16.3146 7.83495 14.6521 7.2623L15.1914 5.09911L13.8746 4.771L13.3496 6.87723C13.0034 6.79089 12.6479 6.70954 12.2945 6.62889L12.8234 4.50875L11.5074 4.18063L10.9678 6.34312C10.6813 6.2779 10.3999 6.21344 10.1269 6.14551L10.1285 6.13871L8.31258 5.68525L7.96229 7.09168C7.96229 7.09168 8.93925 7.31562 8.91866 7.3294C9.45189 7.46249 9.54832 7.81548 9.53231 8.09526L8.91796 10.5596C8.95467 10.569 9.0023 10.5825 9.05486 10.6036C9.01092 10.5927 8.96417 10.5808 8.91567 10.5691L8.05455 14.0214C7.98939 14.1834 7.82398 14.4265 7.45117 14.3342C7.46437 14.3533 6.4941 14.0954 6.4941 14.0954L5.84033 15.6027L7.55394 16.0299C7.87272 16.1098 8.18512 16.1934 8.49277 16.2721L7.94786 18.4601L9.26314 18.7882L9.80276 16.6234C10.1621 16.721 10.5108 16.811 10.8522 16.8958L10.3144 19.0504L11.6312 19.3785L12.1761 17.1946C14.4215 17.6195 16.1099 17.4482 16.8205 15.4172C17.3932 13.782 16.792 12.8389 15.6107 12.2238C16.4711 12.0254 17.1192 11.4595 17.292 10.2905L17.2916 10.2902L17.2915 10.2903ZM14.2829 14.5091C13.876 16.1443 11.1229 15.2604 10.2302 15.0387L10.9533 12.14C11.8459 12.3628 14.7083 12.8038 14.283 14.5091H14.2829ZM14.6902 10.2666C14.319 11.754 12.0275 10.9983 11.2842 10.813L11.9397 8.18406C12.6831 8.36936 15.0769 8.71518 14.6903 10.2666H14.6902Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_309_98">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>


                                <span class="f-16-fig" style="padding-left:10px">BTC ( Bitcoin )</span>

                            </div>
                        </td>
                        <td>
                            <p class="f-16-fig text-dark">$452.07B</p>

                        </td>
                        <td>
                            <p class="f-16-fig text-dark">$23,638.89</p>
                        </td>
                        <td>
                            <p class="f-16-fig text-dark">$30.2B</p>
                        </td>

                        <td>
                            <p class="f-16-fig text-danger">-1.63%</p>
                        </td>

                        <td>
                            <div class="line-chart">
                                <div class="aspect-ratio">
                                    <canvas id="line-chart-transaction_1" height="49"></canvas>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="icon d-md-flex">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_309_98)">
                                        <path d="M23.6397 14.9029C22.0371 21.3315 15.5259 25.2438 9.0965 23.6407C2.6698 22.038 -1.24254 15.5265 0.360847 9.09837C1.96283 2.66903 8.47399 -1.24361 14.9014 0.359081C21.3303 1.96177 25.2424 8.47404 23.6396 14.903L23.6397 14.9029H23.6397Z" fill="#F7931A" />
                                        <path d="M17.2915 10.2903C17.5304 8.69337 16.3146 7.83495 14.6521 7.2623L15.1914 5.09911L13.8746 4.771L13.3496 6.87723C13.0034 6.79089 12.6479 6.70954 12.2945 6.62889L12.8234 4.50875L11.5074 4.18063L10.9678 6.34312C10.6813 6.2779 10.3999 6.21344 10.1269 6.14551L10.1285 6.13871L8.31258 5.68525L7.96229 7.09168C7.96229 7.09168 8.93925 7.31562 8.91866 7.3294C9.45189 7.46249 9.54832 7.81548 9.53231 8.09526L8.91796 10.5596C8.95467 10.569 9.0023 10.5825 9.05486 10.6036C9.01092 10.5927 8.96417 10.5808 8.91567 10.5691L8.05455 14.0214C7.98939 14.1834 7.82398 14.4265 7.45117 14.3342C7.46437 14.3533 6.4941 14.0954 6.4941 14.0954L5.84033 15.6027L7.55394 16.0299C7.87272 16.1098 8.18512 16.1934 8.49277 16.2721L7.94786 18.4601L9.26314 18.7882L9.80276 16.6234C10.1621 16.721 10.5108 16.811 10.8522 16.8958L10.3144 19.0504L11.6312 19.3785L12.1761 17.1946C14.4215 17.6195 16.1099 17.4482 16.8205 15.4172C17.3932 13.782 16.792 12.8389 15.6107 12.2238C16.4711 12.0254 17.1192 11.4595 17.292 10.2905L17.2916 10.2902L17.2915 10.2903ZM14.2829 14.5091C13.876 16.1443 11.1229 15.2604 10.2302 15.0387L10.9533 12.14C11.8459 12.3628 14.7083 12.8038 14.283 14.5091H14.2829ZM14.6902 10.2666C14.319 11.754 12.0275 10.9983 11.2842 10.813L11.9397 8.18406C12.6831 8.36936 15.0769 8.71518 14.6903 10.2666H14.6902Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_309_98">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>


                                <span class="f-16-fig" style="padding-left:10px">BTC ( Bitcoin )</span>

                            </div>
                        </td>
                        <td>
                            <p class="f-16-fig text-dark">$452.07B</p>

                        </td>
                        <td>
                            <p class="f-16-fig text-dark">$23,638.89</p>
                        </td>
                        <td>
                            <p class="f-16-fig text-dark">$30.2B</p>
                        </td>

                        <td>
                            <p class="f-16-fig text-danger">-1.63%</p>
                        </td>

                        <td>
                            <div class="line-chart">
                                <div class="aspect-ratio">
                                    <canvas id="line-chart-transaction_1" height="49"></canvas>
                                </div>
                            </div>
                        </td>
                    </tr>


                </tbody>

                <tfoot>
                    <tr>
                        <td colspan="6">
                            <div class="d-flex justify-content-end">
                                <div class="" style="margin-right: 37px;">
                                    <p class="f-16-fig">Per page: 5</p>
                                </div>

                                <div class="" style="margin-right: 38px;">
                                    <p class="f-16-fig">01-05 of 100</p>
                                </div>

                                <div>
                                    <i class="fa fa-arrow-left" style="margin-right: 37px;"></i>
                                    <i class="fa fa-arrow-right " style="margin-right: 16px;"></i>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css" integrity="sha512-BMbq2It2D3J17/C7aRklzOODG1IQ3+MHw3ifzBHMBwGO/0yUqYmsStgBjI0z5EYlaDEFnvYV7gNYdD3vFLRKsA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <script>
        // ============================================
        // As of Chart.js v2.5.0
        // http://www.chartjs.org/docs
        // ============================================







        const ctx_1 = document.getElementById('line-chart-transaction_1').getContext('2d');


        const myChart_1 = new Chart(ctx_1, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green'],
                datasets: [{
                    label: '# of Votes',
                    data: [4, 6, 0, 5],
                    fill: false,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                    ],
                    borderColor: [
                        '#F4B42A',

                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    xAxes: [{
                        display: false
                    }],
                    yAxes: [{
                        display: false
                    }],
                },
                elements: {

                    point: {
                        radius: 0
                    }
                },
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                tooltips: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.yLabel;
                        }
                    }
                }
            }
        });

        const donet_chart = document.getElementById('doughnut-chart').getContext('2d');
        const donet_chart_chart = new Chart(donet_chart, {
            type: 'doughnut',
            data: {
                labels: ['AUD', 'EUR', 'Other'],
                datasets: [{
                    label: '# of Votes',
                    data: [4, 6, 5],
                    fill: false,
                    backgroundColor: [
                        '#9181DB',
                        '#63ABFD',
                        '#F4B42A'
                    ],
                    borderColor: [

                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    xAxes: [{
                        display: false
                    }],
                    yAxes: [{
                        display: false
                    }],
                },

                maintainAspectRatio: false,

                cutout: '20%',
                radius: '40%'
            }
        });
    </script>
</x-base-layout>