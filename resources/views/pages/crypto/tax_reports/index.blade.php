<x-base-layout>

    <div class="d-md-flex justify-content-between">
        <div>
            <h1 class="f-30-fig-neue">Tax Reports</h1>
        </div>
        <div class="tax_report_top_dropdown ">
            {{ theme()->getView('partials/widgets/form/input/_select',
                                                    array( 
                                                            'type' => 'select' ,
                                                            'name' => '' ,
                                                            'item' => array(
                                                            'ir' =>  'IR',
                                                            'bs'=>   'BS',
                                                            'ks' =>  'KS'
                                                            ) ,

                                                            'placeholder' => 'Tax report for 2022' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}
        </div>
    </div>

    <div class="row tax_reports_main">
        <div class="col-md-6 col-12 h-100">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title f-18-fig-neue">Summary</h5>
                    <p class="card-text f-16-fig">Koinly needs your full transaction history (fiat → crypto → crypto → fiat) in order to calculate your tax reports correctly. The transactions used in this report are summarized below.</p>
                    <div class="tax-report-tags">
                        <a href="#" class="btn1 f-14-neu-400-fig">0 transaction</a>
                        <a href="#" class="btn2 f-14-neu-400-fig">0 deposits</a>
                        <a href="#" class="btn2 f-14-neu-400-fig">0 withdrawals</a>
                        <a href="#" class="btn2 f-14-neu-400-fig">0 trades</a>
                        <a href="#" class="btn2 f-14-neu-400-fig">0 transfers</a>
                    </div>
                    <hr>
                    <!-- <div class="divider bg-dark"> <hr></div> -->
                    <div>
                        <table class="tax-report-table table-responsive">
                            <tr class="d-md-flex justify-content-between f-18-fig-questrial">
                                <td>Capital gains / P&L <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_304_330)">
                                            <path d="M9.99984 18.3333C5.39734 18.3333 1.6665 14.6025 1.6665 9.99999C1.6665 5.39749 5.39734 1.66666 9.99984 1.66666C14.6023 1.66666 18.3332 5.39749 18.3332 9.99999C18.3332 14.6025 14.6023 18.3333 9.99984 18.3333ZM9.99984 16.6667C11.7679 16.6667 13.4636 15.9643 14.7139 14.714C15.9641 13.4638 16.6665 11.7681 16.6665 9.99999C16.6665 8.23188 15.9641 6.53619 14.7139 5.28594C13.4636 4.0357 11.7679 3.33332 9.99984 3.33332C8.23173 3.33332 6.53603 4.0357 5.28579 5.28594C4.03555 6.53619 3.33317 8.23188 3.33317 9.99999C3.33317 11.7681 4.03555 13.4638 5.28579 14.714C6.53603 15.9643 8.23173 16.6667 9.99984 16.6667ZM9.1665 12.5H10.8332V14.1667H9.1665V12.5ZM9.1665 5.83332H10.8332V10.8333H9.1665V5.83332Z" fill="#6E6E6E" fill-opacity="0.6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_304_330">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </td>
                                <td style="color: #F4B42A;">$45.17</td>
                            </tr>
                            <tr class="d-md-flex justify-content-between f-18-fig-questrial">
                                <td>Other gains (futures, derivatives etc) <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_304_330)">
                                            <path d="M9.99984 18.3333C5.39734 18.3333 1.6665 14.6025 1.6665 9.99999C1.6665 5.39749 5.39734 1.66666 9.99984 1.66666C14.6023 1.66666 18.3332 5.39749 18.3332 9.99999C18.3332 14.6025 14.6023 18.3333 9.99984 18.3333ZM9.99984 16.6667C11.7679 16.6667 13.4636 15.9643 14.7139 14.714C15.9641 13.4638 16.6665 11.7681 16.6665 9.99999C16.6665 8.23188 15.9641 6.53619 14.7139 5.28594C13.4636 4.0357 11.7679 3.33332 9.99984 3.33332C8.23173 3.33332 6.53603 4.0357 5.28579 5.28594C4.03555 6.53619 3.33317 8.23188 3.33317 9.99999C3.33317 11.7681 4.03555 13.4638 5.28579 14.714C6.53603 15.9643 8.23173 16.6667 9.99984 16.6667ZM9.1665 12.5H10.8332V14.1667H9.1665V12.5ZM9.1665 5.83332H10.8332V10.8333H9.1665V5.83332Z" fill="#6E6E6E" fill-opacity="0.6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_304_330">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </td>
                                <td>$0.00</td>
                            </tr>
                            <tr class="d-md-flex justify-content-between f-18-fig-questrial">
                                <td>Income <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_304_330)">
                                            <path d="M9.99984 18.3333C5.39734 18.3333 1.6665 14.6025 1.6665 9.99999C1.6665 5.39749 5.39734 1.66666 9.99984 1.66666C14.6023 1.66666 18.3332 5.39749 18.3332 9.99999C18.3332 14.6025 14.6023 18.3333 9.99984 18.3333ZM9.99984 16.6667C11.7679 16.6667 13.4636 15.9643 14.7139 14.714C15.9641 13.4638 16.6665 11.7681 16.6665 9.99999C16.6665 8.23188 15.9641 6.53619 14.7139 5.28594C13.4636 4.0357 11.7679 3.33332 9.99984 3.33332C8.23173 3.33332 6.53603 4.0357 5.28579 5.28594C4.03555 6.53619 3.33317 8.23188 3.33317 9.99999C3.33317 11.7681 4.03555 13.4638 5.28579 14.714C6.53603 15.9643 8.23173 16.6667 9.99984 16.6667ZM9.1665 12.5H10.8332V14.1667H9.1665V12.5ZM9.1665 5.83332H10.8332V10.8333H9.1665V5.83332Z" fill="#6E6E6E" fill-opacity="0.6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_304_330">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </td>
                                <td>$74.55</td>
                            </tr>
                            <tr class="d-md-flex justify-content-between f-18-fig-questrial">
                                <td>Costs & expenses <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_304_330)">
                                            <path d="M9.99984 18.3333C5.39734 18.3333 1.6665 14.6025 1.6665 9.99999C1.6665 5.39749 5.39734 1.66666 9.99984 1.66666C14.6023 1.66666 18.3332 5.39749 18.3332 9.99999C18.3332 14.6025 14.6023 18.3333 9.99984 18.3333ZM9.99984 16.6667C11.7679 16.6667 13.4636 15.9643 14.7139 14.714C15.9641 13.4638 16.6665 11.7681 16.6665 9.99999C16.6665 8.23188 15.9641 6.53619 14.7139 5.28594C13.4636 4.0357 11.7679 3.33332 9.99984 3.33332C8.23173 3.33332 6.53603 4.0357 5.28579 5.28594C4.03555 6.53619 3.33317 8.23188 3.33317 9.99999C3.33317 11.7681 4.03555 13.4638 5.28579 14.714C6.53603 15.9643 8.23173 16.6667 9.99984 16.6667ZM9.1665 12.5H10.8332V14.1667H9.1665V12.5ZM9.1665 5.83332H10.8332V10.8333H9.1665V5.83332Z" fill="#6E6E6E" fill-opacity="0.6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_304_330">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </td>
                                <td>$0.00</td>
                            </tr>
                            <tr class="d-md-flex justify-content-between f-18-fig-questrial">
                                <td>Gifts, donations & lost coins <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_304_330)">
                                            <path d="M9.99984 18.3333C5.39734 18.3333 1.6665 14.6025 1.6665 9.99999C1.6665 5.39749 5.39734 1.66666 9.99984 1.66666C14.6023 1.66666 18.3332 5.39749 18.3332 9.99999C18.3332 14.6025 14.6023 18.3333 9.99984 18.3333ZM9.99984 16.6667C11.7679 16.6667 13.4636 15.9643 14.7139 14.714C15.9641 13.4638 16.6665 11.7681 16.6665 9.99999C16.6665 8.23188 15.9641 6.53619 14.7139 5.28594C13.4636 4.0357 11.7679 3.33332 9.99984 3.33332C8.23173 3.33332 6.53603 4.0357 5.28579 5.28594C4.03555 6.53619 3.33317 8.23188 3.33317 9.99999C3.33317 11.7681 4.03555 13.4638 5.28579 14.714C6.53603 15.9643 8.23173 16.6667 9.99984 16.6667ZM9.1665 12.5H10.8332V14.1667H9.1665V12.5ZM9.1665 5.83332H10.8332V10.8333H9.1665V5.83332Z" fill="#6E6E6E" fill-opacity="0.6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_304_330">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </td>
                                <td>$1.03</td>
                        </table>
                    </div>
                    <hr>

                    <p class="f-14-fig-questrial" style="color: rgba(0, 96, 255, 0.5);
">Note: This is just an indication of your taxable gains. Download a Tax Report to see your short/long-term proceeds, cost-basis, disposals and detailed calculations that you can use in your official tax returns.</p>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="card tax-card-3">
                <div class="card-body">
                    <h5 class="card-title f-18-fig-neue">Help</h5>
                    <div class="accordion tax-report-accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed f-16-fig" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    My capital gains are too high/wrong!
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed f-16-fig" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Some of my income seems to be missing!
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed f-16-fig" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How do I ensure my tax report is accurate?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed f-16-fig" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How do I use Koinly?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the fourth item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-5">
                <div class="card-body">
                    <h5 class="card-title f-18-fig-neue">Report type</h5>
                    <div class="alert alert-danger mt-5" role="alert">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.99984 17.3333C4.39734 17.3333 0.666504 13.6025 0.666504 8.99999C0.666504 4.39749 4.39734 0.666656 8.99984 0.666656C13.6023 0.666656 17.3332 4.39749 17.3332 8.99999C17.3332 13.6025 13.6023 17.3333 8.99984 17.3333ZM8.99984 15.6667C10.7679 15.6667 12.4636 14.9643 13.7139 13.714C14.9641 12.4638 15.6665 10.7681 15.6665 8.99999C15.6665 7.23188 14.9641 5.53619 13.7139 4.28594C12.4636 3.0357 10.7679 2.33332 8.99984 2.33332C7.23173 2.33332 5.53603 3.0357 4.28579 4.28594C3.03555 5.53619 2.33317 7.23188 2.33317 8.99999C2.33317 10.7681 3.03555 12.4638 4.28579 13.714C5.53603 14.9643 7.23173 15.6667 8.99984 15.6667V15.6667ZM8.1665 11.5H9.83317V13.1667H8.1665V11.5ZM8.1665 4.83332H9.83317V9.83332H8.1665V4.83332Z" fill="#D80027" />
                        </svg>
                        You must have a tax plan for this year to download reports. <a href="{{route('crypto.free-plan')}}"><span style="color:#3380FF;"> View plans</span></a>
                    </div>
                    <div class="tax_report_type_dropdown ">
                        {{ theme()->getView('partials/widgets/form/input/_select',
                                                                    array( 
                                                                            'type' => 'select' ,
                                                                            'name' => '' ,
                                                                            'item' => array(
                                                                            'ir' =>  'IR',
                                                                            'bs'=>   'BS',
                                                                            'ks' =>  'KS'
                                                                            ) ,

                                                                            'placeholder' => 'All currencies' ,
                                                                            'required'=> true , 'id' => ''
                                                                        )
                                                                    )
                                                                }}
                    </div>
                    <div class="d-grid mt-4">
                        <button class="btn" style="background: #F4B42A;  color:#fff" type="button">Download Report</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-base-layout>