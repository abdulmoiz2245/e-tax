<x-base-layout>

    <style>
        @media (min-width: 1400px) {
            .container {
                max-width: 1507px;
            }
        }
    </style>

    <div style="margin-top: 4%;">
        <h1 class="f-30-fig-neue tax_plan_title">Choose your tax plan</h1>
    </div>
    <div class="d-md-flex justify-content-between col-8">
        <div>
            <p class="f-16-fig" style="color: #6F6F6F;">Your transactions: 0 in this year, 11 total</p>
        </div>
        <div class="tax_plan_top_dropdown">
            {{ theme()->getView('partials/widgets/form/input/_select',
                array( 
                        'type' => 'select' ,
                        'name' => '' ,
                        'item' => array(
                        'ir' =>  'IR',
                        'bs'=>   'BS',
                        'ks' =>  'KS'
                        ) ,
                        'placeholder' => '2022' ,
                        'required'=> true , 'id' => ''
                    )
                )
            }}
        </div>
    </div>

    <div class="row">
        <div class="col-md-9 col-12">
            <div class="d-md-flex justify-content-between tax_plan_top_bars">
                <div class="card ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title f-20-fig-700-neue">Newbie</h5>
                                <p class="card-text f-16-fig">
                                    100 Transactions
                                </p>
                                <h1 class="f-26-fig-neu">$49</h1>
                            </div>
                            <div class="col-3">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="16" cy="16" r="16" fill="#9181DB" />
                                    <path d="M10.667 22.6667C10.667 21.2522 11.2289 19.8956 12.2291 18.8954C13.2293 17.8952 14.5858 17.3333 16.0003 17.3333C17.4148 17.3333 18.7714 17.8952 19.7716 18.8954C20.7718 19.8956 21.3337 21.2522 21.3337 22.6667H10.667ZM16.0003 16.6667C13.7903 16.6667 12.0003 14.8767 12.0003 12.6667C12.0003 10.4567 13.7903 8.66667 16.0003 8.66667C18.2103 8.66667 20.0003 10.4567 20.0003 12.6667C20.0003 14.8767 18.2103 16.6667 16.0003 16.6667Z" fill="white" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title f-20-fig-700-neue">Holder</h5>
                                <p class="card-text f-16-fig">
                                    1.000 Transactions
                                </p>
                                <h1 class="f-26-fig-neu">$49</h1>
                            </div>
                            <div class="col-3">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="16" cy="16" r="16" fill="#9181DB" />
                                    <path d="M14.6667 14.7407V8.66667L22 12.6667V22H10V12.6667L14.6667 14.7407Z" fill="white" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title f-20-fig-700-neue">Trader</h5>
                                <p class="card-text f-16-fig">
                                    3.000 Transactions
                                </p>
                                <h1 class="f-26-fig-neu">$49</h1>
                            </div>
                            <div class="col-3">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="16" cy="16" r="16" fill="#9181DB" />
                                    <path d="M17.3333 17.2593V23.3333L10 19.3333V10H22V19.3333L17.3333 17.2593Z" fill="white" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title f-20-fig-700-neue">Pro</h5>
                                <p class="card-text f-16-fig">
                                    10.000 + Transactions
                                </p>
                                <h1 class="f-26-fig-neu">$49 <span class="f-18-fig-questrial" style="color: #3D5EC5;">customize</span></h1>
                            </div>
                            <div class="col-3">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="16" cy="16" r="16" fill="#9181DB" />
                                    <path d="M23.3452 14.1225L21.6327 20.715C21.5828 20.9059 21.4712 21.0749 21.3151 21.1957C21.1591 21.3165 20.9675 21.3821 20.7702 21.3825H11.2302C11.0329 21.3821 10.8412 21.3165 10.6852 21.1957C10.5291 21.0749 10.4175 20.9059 10.3677 20.715L8.65516 14.1225C8.61352 13.9638 8.61649 13.7967 8.66376 13.6396C8.71103 13.4825 8.80075 13.3415 8.92304 13.2321C9.04532 13.1228 9.19543 13.0493 9.35682 13.0198C9.5182 12.9903 9.68459 13.006 9.83766 13.065L12.6752 14.1575C12.7039 14.1687 12.7354 14.1703 12.7651 14.1622C12.7948 14.1541 12.8211 14.1367 12.8402 14.1125L15.2977 10.9625C15.3806 10.8551 15.4871 10.7682 15.6088 10.7084C15.7306 10.6486 15.8645 10.6175 16.0002 10.6175C16.1358 10.6175 16.2697 10.6486 16.3915 10.7084C16.5133 10.7682 16.6197 10.8551 16.7027 10.9625L19.1602 14.1125C19.1792 14.1367 19.2055 14.1541 19.2352 14.1622C19.2649 14.1703 19.2965 14.1687 19.3252 14.1575L22.1627 13.065C22.3157 13.0085 22.4811 12.9948 22.6413 13.0253C22.8015 13.0558 22.9504 13.1294 23.072 13.2381C23.1935 13.3468 23.2832 13.4866 23.3313 13.6424C23.3794 13.7982 23.3842 13.9642 23.3452 14.1225Z" fill="white" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card tax_plan_list mt-5">
                <div class="d-flex justify-content-between pt-2">
                    <div>
                        <input type="checkbox" name="" id="">
                        <label>
                            <h5 class="f-20-fig">Tax report for United States</h5>
                            <p class="f-16-fig" style="color: #6F6F6F;">Access reports for the tax year beginning on 1 January 2021</p>
                        </label>
                    </div>
                    <div>
                        <p class="f-18-fig-questrial" style="color: #219653;">Included</p>
                    </div>
                </div>
                <hr style="color:#BFBFBF ;">
                <div class="d-flex justify-content-between">
                    <div>
                        <input type="checkbox" name="" id="">
                        <label>
                            <h5 class="f-20-fig">Daily Sync</h5>
                            <p class="f-16-fig" style="color: #6F6F6F;">Koinly will automatically check for new transactions on all your synced wallets. Valid for 1 year from date of purchase</p>
                        </label>
                    </div>
                    <div>
                        <p class="f-18-fig-questrial">$120</p>
                    </div>
                </div>
                <hr style="color:#BFBFBF ;">
                <div class="d-flex justify-content-between">
                    <div>
                        <input type="checkbox" name="" id="">
                        <label>
                            <h5 class="f-20-fig">Dual Nationality</h5>
                            <p class="f-16-fig" style="color: #6F6F6F;">Download reports for one additional country. Ideal for expats</p>
                        </label>
                    </div>
                    <div>
                        <p class="f-18-fig-questrial">$120</p>
                    </div>
                </div>
                <hr style="color:#BFBFBF ;">
                <div class="d-flex justify-content-between">
                    <div>
                        <input type="checkbox" name="" id="">
                        <label>
                            <h5 class="f-20-fig">Tax report for United States</h5>
                            <p class="f-16-fig" style="color: #6F6F6F;">Due to high demand the expert reviews can take 4-6 weeks to complete. One of our experts will review your imported data and highlight any issues. Ideal for new users</p>
                        </label>
                    </div>
                    <div>
                        <p class="f-18-fig-questrial">$120</p>
                    </div>
                </div>
                <hr class="bottom_hr" style="color:#BFBFBF ;">
                <div class="d-flex justify-content-between">
                    <div class="total_cost" style="align-self:center;">
                        <span class="f-18-fig-questrial ps-10" style="color: #6F6F6F;">Total cost: <span class="f-18-fig-neue">$320</span></span>
                    </div>
                    <div>
                        <a href="{{ route('crypto.checkout-type') }}" class="btn" style="background: #F4B42A;  color:#fff" type="button">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-12 tax_plan_card_list">
            <div class="card">
                <div class="card-header f-20-fig">
                    All Plans Include
                </div>
                <ul class="list-group list-group-flush f-18-fig-questrial p-4">
                    <li class="list-group-item">
                        <span class="pe-3"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 20C4.477 20 0 15.523 0 10C0 4.477 4.477 0 10 0C15.523 0 20 4.477 20 10C20 15.523 15.523 20 10 20ZM9.003 14L16.073 6.929L14.659 5.515L9.003 11.172L6.174 8.343L4.76 9.757L9.003 14Z" fill="#F4B42A" />
                            </svg></span>
                        Unlimited revisions
                    </li>
                    <li class="list-group-item">
                        <span class="pe-3"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 20C4.477 20 0 15.523 0 10C0 4.477 4.477 0 10 0C15.523 0 20 4.477 20 10C20 15.523 15.523 20 10 20ZM9.003 14L16.073 6.929L14.659 5.515L9.003 11.172L6.174 8.343L4.76 9.757L9.003 14Z" fill="#F4B42A" />
                            </svg></span>
                        Unlimited wallets
                    </li>
                    <li class="list-group-item">
                        <span class="pe-3"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 20C4.477 20 0 15.523 0 10C0 4.477 4.477 0 10 0C15.523 0 20 4.477 20 10C20 15.523 15.523 20 10 20ZM9.003 14L16.073 6.929L14.659 5.515L9.003 11.172L6.174 8.343L4.76 9.757L9.003 14Z" fill="#F4B42A" />
                            </svg></span>
                        Form 8949 & Schedule D
                    </li>
                    <li class="list-group-item">
                        <span class="pe-3"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 20C4.477 20 0 15.523 0 10C0 4.477 4.477 0 10 0C15.523 0 20 4.477 20 10C20 15.523 15.523 20 10 20ZM9.003 14L16.073 6.929L14.659 5.515L9.003 11.172L6.174 8.343L4.76 9.757L9.003 14Z" fill="#F4B42A" />
                            </svg></span>
                        TurboTax, TaxAct Export
                    </li>
                    <li class="list-group-item">
                        <span class="pe-3"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 20C4.477 20 0 15.523 0 10C0 4.477 4.477 0 10 0C15.523 0 20 4.477 20 10C20 15.523 15.523 20 10 20ZM9.003 14L16.073 6.929L14.659 5.515L9.003 11.172L6.174 8.343L4.76 9.757L9.003 14Z" fill="#F4B42A" />
                            </svg></span>
                        Comprehensive tax reports
                    </li>
                    <li class="list-group-item">
                        <span class="pe-3"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 20C4.477 20 0 15.523 0 10C0 4.477 4.477 0 10 0C15.523 0 20 4.477 20 10C20 15.523 15.523 20 10 20ZM9.003 14L16.073 6.929L14.659 5.515L9.003 11.172L6.174 8.343L4.76 9.757L9.003 14Z" fill="#F4B42A" />
                            </svg></span>
                        Basic portfolio tracking
                    </li>
                    <li class="list-group-item">
                        <span class="pe-3"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 20C4.477 20 0 15.523 0 10C0 4.477 4.477 0 10 0C15.523 0 20 4.477 20 10C20 15.523 15.523 20 10 20ZM9.003 14L16.073 6.929L14.659 5.515L9.003 11.172L6.174 8.343L4.76 9.757L9.003 14Z" fill="#F4B42A" />
                            </svg></span>
                        Email support
                    </li>
                </ul>
                <hr class="" style="margin: 26px 26px 13px 26px; color:#BFBFBF ;">
                <div>
                    <p class="text-center f-14-fig-questrial" style="color: #BFBFBF;"><span class="pe-1"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.00027 12.1733L3.29827 14.8053L4.34827 9.51998L0.391602 5.86131L5.74294 5.22665L8.00027 0.333313L10.2576 5.22665L15.6089 5.86131L11.6523 9.51998L12.7023 14.8053L8.00027 12.1733Z" fill="#BFBFBF" />
                            </svg>
                        </span> E600+ reviews on Trustpilot</p>
                </div>
            </div>
        </div>
    </div>
</x-base-layout>