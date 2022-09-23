<x-base-layout>
    <style>
        body {
            background-color: #F8F9FD;
        }
    </style>
    <div class="checkout_type mx-auto">
        <div class="f-16-neu-400-fig" style="padding-bottom: 3%; padding-top:3%;">
                <a href="{{route('crypto.free-plan')}}"><span class="pe-2">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                </span>
                <span style="color: #6F6F6F;"> Back to Tax Plan</span>
            </a>
        </div>
        <h1 class="checkout_type_title f-30-fig-neue">Choose Checkout Type</h1>
        <p class="f-16-fig" style="color: #6F6F6F;">Your can pay with Debit, Credit Card or with Crypto </p>
        <div class="card" id="card_payment">
            <div class="card-body text-center">
                <p class="body-text f-16-fig mb-5" style="color: #6F6F6F;"> Debit or Credit Card </p>
                <div class="payment_options mb-2">
                    <span>
                        <svg width="60" height="40" viewBox="0 0 60 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_311_183)">
                        <path d="M3.07692 0.769287H56.9231C58.6225 0.769287 60 2.1469 60 3.84621V36.1539C60 37.8533 58.6225 39.2308 56.9231 39.2308H3.07692C1.37762 39.2308 0 37.8533 0 36.1539V3.84621C0 2.1469 1.37762 0.769287 3.07692 0.769287Z" fill="#0E4595"/>
                        <path d="M22.5541 27.5946L25.1203 12.5361H29.2249L26.6569 27.5946H22.5541ZM41.4856 12.8607C40.6726 12.5557 39.3982 12.2283 37.807 12.2283C33.7512 12.2283 30.8943 14.2706 30.8701 17.1977C30.8471 19.3616 32.9096 20.5687 34.4664 21.289C36.0642 22.027 36.6012 22.4977 36.5936 23.1569C36.5836 24.1662 35.3178 24.6273 34.1381 24.6273C32.4952 24.6273 31.6225 24.3991 30.2745 23.8369L29.7456 23.5977L29.1695 26.9687C30.1282 27.389 31.901 27.7531 33.7416 27.772C38.0562 27.772 40.857 25.753 40.889 22.6272C40.9043 20.9142 39.8109 19.6106 37.4428 18.5358C36.0082 17.8393 35.1296 17.3743 35.1389 16.669C35.1389 16.0431 35.8826 15.3737 37.4894 15.3737C38.8316 15.353 39.804 15.6457 40.5616 15.9507L40.9293 16.1245L41.4856 12.8607ZM52.0479 12.5359H48.8762C47.8937 12.5359 47.1584 12.8041 46.7269 13.7847L40.6312 27.5847H44.9413C44.9413 27.5847 45.6459 25.729 45.8053 25.3217C46.2765 25.3217 50.4634 25.3282 51.0621 25.3282C51.1849 25.8553 51.5613 27.5847 51.5613 27.5847H55.3701L52.0479 12.5354V12.5359ZM47.0158 22.2597C47.3552 21.3921 48.6512 18.0503 48.6512 18.0503C48.6269 18.0904 48.988 17.1784 49.1953 16.613L49.4726 17.9114C49.4726 17.9114 50.2587 21.506 50.4229 22.2597H47.0158ZM19.0696 12.5359L15.0512 22.8051L14.6229 20.7182C13.8749 18.3126 11.5441 15.7063 8.93848 14.4014L12.6128 27.5707L16.9556 27.5657L23.4174 12.5357H19.0696" fill="white"/>
                        <path d="M11.3018 12.5353H4.68324L4.63086 12.8487C9.77994 14.0951 13.187 17.1073 14.6016 20.7263L13.1624 13.8063C12.9139 12.8529 12.1934 12.5683 11.3019 12.535" fill="#F2AE14"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_311_183">
                        <rect width="60" height="40" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                    </span>
                    <span>
                        <svg width="60" height="40" viewBox="0 0 60 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_311_187)">
                        <path d="M3.07692 0.769287H56.9231C58.6225 0.769287 60 2.1469 60 3.84621V36.1539C60 37.8533 58.6225 39.2308 56.9231 39.2308H3.07692C1.37762 39.2308 0 37.8533 0 36.1539V3.84621C0 2.1469 1.37762 0.769287 3.07692 0.769287Z" fill="#16366F"/>
                        <path d="M34.539 20C34.539 27.6263 28.3567 33.8076 20.7305 33.8076C13.1044 33.8076 6.92285 27.626 6.92285 20C6.92285 12.3743 13.1045 6.19226 20.7305 6.19226C28.3565 6.19226 34.539 12.3746 34.539 20Z" fill="#D9222A"/>
                        <path d="M39.2689 6.19202C35.7013 6.19202 32.4503 7.54555 29.9997 9.76632C29.5005 10.2193 29.0345 10.7076 28.6055 11.2276H31.3952C31.7772 11.6919 32.1287 12.1805 32.4479 12.6901H27.5529C27.2585 13.1609 26.9929 13.6492 26.7574 14.1522H33.2429C33.4655 14.628 33.6607 15.1161 33.8276 15.6141H26.1728C26.0119 16.0937 25.878 16.5819 25.7715 17.0763H34.2284C34.4353 18.0371 34.5395 19.0172 34.5393 20C34.5393 21.5334 34.2889 23.0087 33.8274 24.3862H26.1726C26.3391 24.8846 26.5342 25.3727 26.7569 25.8485H33.2428C33.0071 26.3516 32.7413 26.8399 32.4469 27.311H27.5526C27.8722 27.8209 28.2242 28.3094 28.6053 28.7722H31.3944C30.9659 29.2932 30.4998 29.7819 29.9998 30.2347C32.4506 32.4552 35.7012 33.8081 39.269 33.8081C46.895 33.808 53.0775 27.6264 53.0775 20.0004C53.0775 12.375 46.8952 6.19271 39.269 6.19271" fill="#EE9F2D"/>
                        <path d="M51.237 27.6969C51.237 27.4506 51.4364 27.2506 51.6828 27.2506C51.9293 27.2506 52.1287 27.4506 52.1287 27.6969C52.1287 27.9429 51.9293 28.1429 51.6828 28.1429C51.4365 28.1429 51.2369 27.9431 51.237 27.6969ZM51.6828 28.0359C51.8701 28.0359 52.0218 27.884 52.0219 27.6969C52.0219 27.5097 51.8702 27.3581 51.6831 27.3581H51.6828C51.496 27.3578 51.3444 27.5091 51.3441 27.6959V27.6969C51.3438 27.884 51.4954 28.0359 51.6824 28.036C51.6825 28.0359 51.6827 28.0359 51.6828 28.0359ZM51.6226 27.8929H51.5312V27.501H51.6965C51.7311 27.501 51.7664 27.501 51.7969 27.5206C51.8287 27.5419 51.8466 27.5798 51.8466 27.6189C51.8466 27.6627 51.8207 27.7038 51.7787 27.7198L51.8508 27.8929H51.7496L51.6896 27.7378H51.6227V27.8929H51.6226ZM51.6226 27.6706H51.6732C51.6921 27.6706 51.712 27.6721 51.729 27.6629C51.7441 27.6533 51.7518 27.6353 51.7518 27.6179C51.7518 27.6029 51.7425 27.5856 51.7296 27.5783C51.7137 27.5682 51.6884 27.5705 51.6713 27.5705H51.6226V27.6706ZM17.5072 21.5119C17.3499 21.4936 17.2807 21.4887 17.1726 21.4887C16.323 21.4887 15.8928 21.7802 15.8928 22.3555C15.8928 22.7102 16.1028 22.9359 16.4303 22.9359C17.0409 22.9359 17.481 22.3544 17.5072 21.5119ZM18.5973 24.05H17.3553L17.3838 23.4596C17.005 23.9263 16.4995 24.148 15.8127 24.148C15.0002 24.148 14.4431 23.5134 14.4431 22.592C14.4431 21.2055 15.4121 20.3966 17.0752 20.3966C17.2451 20.3966 17.463 20.4119 17.6861 20.4403C17.7326 20.2526 17.7448 20.1722 17.7448 20.0711C17.7448 19.6936 17.4835 19.5528 16.7832 19.5528C16.0499 19.5445 15.4451 19.7275 15.1967 19.8093C15.2124 19.7146 15.4044 18.5279 15.4044 18.5279C16.1515 18.3089 16.6441 18.2266 17.1986 18.2266C18.4858 18.2266 19.1675 18.8044 19.1663 19.8967C19.1688 20.1894 19.1204 20.5506 19.0448 21.0253C18.9146 21.8507 18.6355 23.6189 18.5973 24.05ZM13.8159 24.05H12.3168L13.1755 18.6656L11.2582 24.05H10.2367L10.1105 18.6964L9.20792 24.05H7.80469L8.97684 17.0459H11.1322L11.263 20.9663L12.5778 17.0459H14.9752L13.8159 24.05ZM41.1221 21.5119C40.9654 21.4936 40.8958 21.4887 40.7881 21.4887C39.9388 21.4887 39.5085 21.7802 39.5085 22.3555C39.5085 22.7102 39.7182 22.9359 40.0457 22.9359C40.6564 22.9359 41.0968 22.3544 41.1221 21.5119ZM42.2131 24.05H40.9711L40.9992 23.4596C40.6204 23.9263 40.1146 24.148 39.4285 24.148C38.6157 24.148 38.0592 23.5134 38.0592 22.592C38.0592 21.2055 39.0275 20.3966 40.6909 20.3966C40.8608 20.3966 41.0784 20.4119 41.3012 20.4403C41.3477 20.2526 41.3599 20.1722 41.3599 20.0711C41.3599 19.6936 41.099 19.5528 40.3987 19.5528C39.6654 19.5445 39.0611 19.7275 38.8118 19.8093C38.8275 19.7146 39.0201 18.5279 39.0201 18.5279C39.7673 18.3089 40.2596 18.2266 40.8134 18.2266C42.1011 18.2266 42.7829 18.8044 42.7817 19.8967C42.7841 20.1894 42.7358 20.5506 42.6601 21.0253C42.5308 21.8507 42.2509 23.6189 42.2131 24.05ZM25.26 23.9635C24.8497 24.0927 24.5298 24.148 24.1831 24.148C23.4167 24.148 22.9985 23.7076 22.9985 22.8967C22.9875 22.6452 23.1087 21.9829 23.2038 21.3785C23.2904 20.8464 23.8538 17.4916 23.8538 17.4916H25.3439L25.1699 18.3538H26.0699L25.8666 19.7227H24.9634C24.7903 20.806 24.5438 22.1554 24.541 22.3343C24.541 22.6279 24.6977 22.756 25.0541 22.756C25.2249 22.756 25.3572 22.7386 25.4583 22.7022L25.26 23.9635ZM29.8285 23.9173C29.3167 24.0737 28.8228 24.1494 28.2994 24.1481C26.6315 24.1465 25.7619 23.2753 25.7619 21.6072C25.7619 19.66 26.8681 18.2266 28.3696 18.2266C29.5981 18.2266 30.3827 19.0292 30.3827 20.2879C30.3827 20.7055 30.3288 21.1132 30.1991 21.6888H27.2318C27.1315 22.5151 27.6602 22.8593 28.5269 22.8593C29.0604 22.8593 29.5414 22.7493 30.0763 22.5006L29.8285 23.9173ZM28.9911 20.5404C28.9993 20.4217 29.1491 19.5237 28.2978 19.5237C27.8231 19.5237 27.4837 19.8856 27.3455 20.5404H28.9911ZM19.4972 20.1545C19.4972 20.875 19.8465 21.3718 20.6388 21.7449C21.2459 22.0303 21.3398 22.1149 21.3398 22.3734C21.3398 22.7286 21.0721 22.8888 20.4789 22.8888C20.0318 22.8888 19.6158 22.819 19.136 22.6642C19.136 22.6642 18.9388 23.9196 18.9298 23.9796C19.2706 24.0539 19.5745 24.1228 20.4898 24.1481C22.0715 24.1481 22.802 23.5459 22.802 22.2443C22.802 21.4616 22.4962 21.0023 21.7453 20.6571C21.1168 20.3686 21.0446 20.3042 21.0446 20.0382C21.0446 19.7302 21.2937 19.5731 21.7783 19.5731C22.0725 19.5731 22.4745 19.6045 22.8552 19.6587L23.0687 18.3376C22.6805 18.276 22.0921 18.2266 21.7495 18.2266C20.0725 18.2266 19.4921 19.1026 19.4972 20.1545ZM37.1195 18.3763C37.5359 18.3763 37.9241 18.4856 38.459 18.7548L38.7041 17.2346C38.4846 17.1485 37.7115 16.6423 37.0568 16.6423C36.0535 16.6423 35.2055 17.14 34.6091 17.9616C33.7391 17.6734 33.3815 18.2558 32.943 18.8359L32.5536 18.9266C32.5831 18.7356 32.6098 18.5459 32.6008 18.3539H31.2241C31.0361 20.1167 30.7027 21.9023 30.4418 23.6673L30.3738 24.0501H31.8735C32.1238 22.4237 32.261 21.3823 32.3443 20.6776L32.9091 20.3635C32.9934 20.0496 33.2575 19.9436 33.7872 19.9564C33.716 20.3416 33.6804 20.7326 33.6808 21.1244C33.6808 22.9879 34.6863 24.1481 36.3001 24.1481C36.7158 24.1481 37.0725 24.0933 37.6248 23.9437L37.8887 22.3468C37.3918 22.5914 36.984 22.7065 36.6148 22.7065C35.7434 22.7065 35.2161 22.0633 35.2161 21C35.216 19.4577 36.0003 18.3763 37.1195 18.3763Z" fill="black"/>
                        <path d="M14.2466 23.6338H12.7473L13.6065 18.2502L11.6892 23.6338H10.6675L10.5412 18.2809L9.63866 23.6338H8.23535L9.40751 16.6306H11.5629L11.6235 20.9662L13.0777 16.6306H15.4059L14.2466 23.6338Z" fill="white"/>
                        <path d="M49.809 17.0461L49.4768 19.0698C49.0668 18.5305 48.6265 18.1401 48.0451 18.1401C47.2886 18.1401 46.6001 18.7135 46.1495 19.5574C45.522 19.4272 44.8728 19.2064 44.8728 19.2064L44.8725 19.2115C44.9231 18.7398 44.9433 18.4519 44.9388 18.3541H43.5619C43.3745 20.117 43.0411 21.9026 42.7806 23.6676L42.7119 24.0504H44.2113C44.4138 22.7352 44.569 21.6432 44.6831 20.7772C45.1953 20.3144 45.4517 19.9105 45.9693 19.9374C45.7401 20.4918 45.6058 21.1301 45.6058 21.7849C45.6058 23.209 46.3264 24.1484 47.4161 24.1484C47.9655 24.1484 48.3869 23.959 48.7981 23.5199L48.728 24.0495H50.1459L51.2876 17.0461H49.809ZM47.9344 22.734C47.4241 22.734 47.1665 22.3564 47.1665 21.6111C47.1665 20.4917 47.6488 19.6977 48.3289 19.6977C48.8439 19.6977 49.1228 20.0903 49.1228 20.8137C49.1228 21.943 48.6328 22.734 47.9344 22.734Z" fill="black"/>
                        <path d="M17.9375 21.097C17.7804 21.0788 17.7109 21.0739 17.6032 21.0739C16.7535 21.0739 16.3236 21.3653 16.3236 21.9406C16.3236 22.2947 16.5336 22.5211 16.8606 22.5211C17.4717 22.521 17.9118 21.9396 17.9375 21.097ZM19.0282 23.6342H17.7862L17.8144 23.0447C17.4359 23.5104 16.9298 23.7332 16.2436 23.7332C15.4307 23.7332 14.874 23.0986 14.874 22.1771C14.874 20.79 15.8426 19.9816 17.506 19.9816C17.6759 19.9816 17.8939 19.997 18.1166 20.0255C18.1631 19.8376 18.1753 19.7573 18.1753 19.6556C18.1753 19.2781 17.9144 19.138 17.214 19.138C16.4804 19.1296 15.8759 19.3127 15.6272 19.3935C15.6429 19.2992 15.8349 18.1136 15.8349 18.1136C16.5817 17.8938 17.0749 17.8113 17.6288 17.8113C18.9163 17.8113 19.5983 18.3896 19.5971 19.481C19.5993 19.7748 19.5506 20.1357 19.4753 20.6098C19.3455 21.4348 19.066 23.204 19.0282 23.6342ZM39.1343 16.8194L38.8888 18.34C38.3542 18.071 37.9657 17.9614 37.5498 17.9614C36.4305 17.9614 35.6459 19.0428 35.6459 20.585C35.6459 21.6482 36.1734 22.2913 37.0446 22.2913C37.4139 22.2913 37.8213 22.1765 38.318 21.9315L38.0549 23.5276C37.5023 23.6783 37.146 23.7332 36.7299 23.7332C35.1163 23.7332 34.1106 22.5729 34.1106 20.7094C34.1106 18.2056 35.4998 16.4556 37.4866 16.4556C38.141 16.4556 38.9145 16.7332 39.1343 16.8194ZM41.5529 21.097C41.3959 21.0788 41.3267 21.0739 41.2186 21.0739C40.3693 21.0739 39.9391 21.3653 39.9391 21.9406C39.9391 22.2947 40.149 22.5211 40.4763 22.5211C41.0869 22.521 41.5273 21.9396 41.5529 21.097ZM42.6436 23.6342H41.4013L41.4298 23.0447C41.051 23.5104 40.5452 23.7332 39.859 23.7332C39.0465 23.7332 38.4895 23.0986 38.4895 22.1771C38.4895 20.79 39.4583 19.9816 41.1212 19.9816C41.2914 19.9816 41.509 19.997 41.732 20.0255C41.7783 19.8376 41.7907 19.7573 41.7907 19.6556C41.7907 19.2781 41.5298 19.138 40.8295 19.138C40.0962 19.1296 39.4913 19.3127 39.2426 19.3935C39.2583 19.2992 39.4506 18.1136 39.4506 18.1136C40.1975 17.8938 40.6903 17.8113 41.2442 17.8113C42.532 17.8113 43.2137 18.3896 43.2121 19.481C43.2147 19.7748 43.1663 20.1357 43.0906 20.6098C42.9613 21.4348 42.6811 23.204 42.6436 23.6342ZM25.6906 23.5479C25.2799 23.6771 24.9601 23.7332 24.6136 23.7332C23.8473 23.7332 23.429 23.2927 23.429 22.482C23.4184 22.2296 23.5396 21.568 23.6348 20.9636C23.7209 20.4309 24.2845 17.0765 24.2845 17.0765H25.7743L25.6005 17.939H26.3653L26.1617 19.3073H25.3944C25.2213 20.3912 24.9742 21.7395 24.9716 21.9187C24.9716 22.2133 25.1287 22.3405 25.4848 22.3405C25.6556 22.3405 25.7877 22.3238 25.8889 22.2873L25.6906 23.5479ZM30.2592 23.5024C29.7476 23.6588 29.253 23.7342 28.7299 23.7332C27.0619 23.7316 26.1925 22.8604 26.1925 21.1922C26.1925 19.2444 27.2986 17.8114 28.8002 17.8114C30.0286 17.8114 30.8133 18.6136 30.8133 19.873C30.8133 20.2909 30.7594 20.6986 30.63 21.2739H27.6627C27.5623 22.1001 28.0911 22.4447 28.9579 22.4447C29.4909 22.4447 29.9723 22.3344 30.5069 22.085L30.2592 23.5024ZM29.4213 20.1246C29.4303 20.0063 29.5797 19.1079 28.728 19.1079C28.2537 19.1079 27.9143 19.4707 27.7761 20.1246H29.4213ZM19.9275 19.7396C19.9275 20.46 20.2769 20.9563 21.0692 21.33C21.6762 21.6153 21.7701 21.7002 21.7701 21.9585C21.7701 22.3136 21.5022 22.4739 20.9096 22.4739C20.4621 22.4739 20.0461 22.404 19.5659 22.2493C19.5659 22.2493 19.3695 23.5046 19.3606 23.5646C19.7006 23.639 20.0047 23.707 20.9201 23.7332C22.5022 23.7332 23.2323 23.131 23.2323 21.8296C23.2323 21.0466 22.9269 20.5873 22.1756 20.2422C21.5473 19.9531 21.4746 19.8896 21.4746 19.6233C21.4746 19.3156 21.7243 19.1573 22.2086 19.1573C22.5025 19.1573 22.9044 19.1896 23.2858 19.2438L23.4989 17.9223C23.1112 17.8607 22.5227 17.8114 22.18 17.8114C20.5028 17.8114 19.9227 18.6867 19.9275 19.7396ZM50.5775 23.6342H49.1593L49.2298 23.104C48.8185 23.5437 48.3971 23.7332 47.8477 23.7332C46.7579 23.7332 46.0377 22.7937 46.0377 21.3697C46.0377 19.4751 47.1547 17.878 48.4769 17.878C49.0583 17.878 49.4984 18.1155 49.908 18.6546L50.2406 16.6309H51.7192L50.5775 23.6342ZM48.3663 22.3181C49.0644 22.3181 49.5548 21.5271 49.5548 20.3986C49.5548 19.6752 49.2756 19.2826 48.7606 19.2826C48.0807 19.2826 47.5978 20.0762 47.5978 21.196C47.5977 21.9411 47.856 22.3181 48.3663 22.3181ZM43.9938 17.939C43.8062 19.7018 43.4728 21.4874 43.2121 23.2515L43.1436 23.6342H44.6429C45.1791 20.1515 45.3089 19.4713 46.1496 19.5566C46.2836 18.8438 46.5329 18.2194 46.7188 17.9043C46.0909 17.7736 45.7403 18.1284 45.2813 18.8024C45.3175 18.5111 45.3839 18.2281 45.3707 17.939H43.9938ZM31.6538 17.939C31.4656 19.7018 31.1323 21.4874 30.8717 23.2515L30.8035 23.6342H32.3035C32.839 20.1515 32.9686 19.4713 33.8088 19.5566C33.9434 18.8438 34.1928 18.2194 34.378 17.9043C33.7508 17.7736 33.3999 18.1284 32.9413 18.8024C32.9774 18.5111 33.0432 18.2281 33.0306 17.939H31.6538ZM51.2361 23.1883C51.2361 22.9411 51.4358 22.7422 51.6819 22.7422C51.9279 22.742 52.1275 22.9412 52.1277 23.1872V23.1883C52.1276 23.4345 51.9281 23.634 51.6819 23.6342C51.4358 23.634 51.2363 23.4345 51.2361 23.1883ZM51.6819 23.5271C51.869 23.5272 52.0206 23.3756 52.0206 23.1886V23.1884C52.0209 23.0013 51.8693 22.8495 51.6823 22.8493H51.6819C51.4946 22.8494 51.3429 23.0012 51.3428 23.1884C51.343 23.3755 51.4948 23.5271 51.6819 23.5271ZM51.6216 23.3833H51.5303V22.9922H51.6959C51.7303 22.9922 51.7658 22.9928 51.7956 23.0117C51.8276 23.0335 51.8459 23.0707 51.8459 23.1097C51.8459 23.154 51.82 23.1953 51.7776 23.211L51.85 23.383H51.7486L51.6886 23.2286H51.6216V23.383V23.3833ZM51.6216 23.1617H51.6719C51.6908 23.1617 51.7114 23.1631 51.728 23.154C51.743 23.1444 51.7507 23.1263 51.7507 23.1089C51.75 23.0927 51.7419 23.0778 51.7286 23.0686C51.7129 23.0596 51.6869 23.062 51.6699 23.062H51.6216V23.1617H51.6216Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_311_187">
                        <rect width="60" height="40" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                    </span>
                    <span>
                        <svg width="60" height="40" viewBox="0 0 60 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_311_195)">
                        <path d="M3.74995 0H56.25C58.3201 0 60 1.55812 60 3.47979V36.5219C60 38.4419 58.3201 40 56.25 40H3.74995C1.67807 40.0002 0 38.4419 0 36.5221V3.47979C0 1.55812 1.67992 0 3.74995 0Z" fill="#26A6D1"/>
                        <path d="M9.67506 13.9126L3.75 26.0739H10.8431L11.7225 24.1349H13.7325L14.6118 26.0739H22.4193V24.594L23.115 26.0739H27.1537L27.8494 24.5627V26.0739H44.087L46.0614 24.1853L47.9101 26.0739L56.2501 26.0896L50.3063 20.0272L56.2501 13.9126H48.0395L46.1175 15.7664L44.327 13.9126H26.6626L25.1458 17.0515L23.5934 13.9126H16.515V15.3422L15.7276 13.9126C15.7276 13.9126 9.67506 13.9126 9.67506 13.9126ZM11.0475 15.6395H14.5051L18.4352 23.8862V15.6395H22.2227L25.2583 21.5523L28.0559 15.6395H31.8245V24.3661H29.5314L29.5127 17.528L26.1695 24.3661H24.1182L20.7563 17.528V24.3661H16.0388L15.1444 22.4097H10.3126L9.42006 24.3644H6.89247L11.0475 15.6395ZM33.9225 15.6395H43.2469L46.0988 18.4967L49.0426 15.6395H51.8945L47.5614 20.0255L51.8945 24.3609H48.9133L46.0614 21.4705L43.1026 24.3609H33.9225V15.6395ZM12.7295 17.116L11.1376 20.6011H14.3196L12.7295 17.116ZM36.2252 17.4464V19.0394H41.312V20.815H36.2252V22.5541H41.9308L44.582 19.9925L42.0433 17.4448H36.2252V17.4464Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_311_195">
                        <rect width="60" height="40" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
        <div class="card mt-5" id="crypto_payment">
            <div class="card-body text-center">
                <p class="body-text f-16-fig mb-5" style="color: #6F6F6F;"> Cryptocurrency  </p>
                <div class="payment_options mb-2">
                    <span>
                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_311_199)">
                        <path d="M37.4292 23.5962C34.8916 33.7749 24.5823 39.9694 14.4024 37.4312C4.22681 34.8936 -1.96773 24.5836 0.570975 14.4057C3.10745 4.22596 13.4168 -1.96904 23.5935 0.568545C33.7726 3.10613 39.9668 13.4172 37.4289 23.5964L37.4291 23.5962H37.4292Z" fill="#F7931A"/>
                        <path d="M27.3781 16.2929C27.7563 13.7644 25.8313 12.4053 23.199 11.4986L24.0529 8.07352L21.968 7.554L21.1367 10.8889C20.5886 10.7522 20.0257 10.6234 19.4662 10.4957L20.3036 7.13878L18.2199 6.61926L17.3655 10.0432C16.9119 9.93993 16.4664 9.83787 16.0342 9.73032L16.0366 9.71955L13.1615 9.00157L12.6068 11.2284C12.6068 11.2284 14.1537 11.583 14.1211 11.6048C14.9654 11.8155 15.1181 12.3744 15.0927 12.8174L14.12 16.7194C14.1781 16.7341 14.2535 16.7555 14.3367 16.7889C14.2672 16.7717 14.1932 16.7528 14.1164 16.7344L12.7529 22.2005C12.6497 22.457 12.3878 22.8419 11.7976 22.6958C11.8185 22.726 10.2822 22.3176 10.2822 22.3176L9.24707 24.7042L11.9603 25.3805C12.465 25.5071 12.9597 25.6396 13.4468 25.7641L12.584 29.2284L14.6665 29.7479L15.5209 26.3204C16.0898 26.4748 16.642 26.6173 17.1825 26.7516L16.3309 30.163L18.416 30.6825L19.2786 27.2247C22.8339 27.8975 25.5072 27.6262 26.6324 24.4105C27.5391 21.8215 26.5872 20.3281 24.7168 19.3543C26.0792 19.0401 27.1053 18.1441 27.3789 16.2932L27.3782 16.2927L27.3781 16.2929ZM22.6145 22.9727C21.9702 25.5617 17.6111 24.1622 16.1978 23.8112L17.3427 19.2216C18.7559 19.5744 23.2879 20.2726 22.6146 22.9727H22.6145ZM23.2593 16.2554C22.6716 18.6104 19.0434 17.4139 17.8665 17.1206L18.9045 12.958C20.0814 13.2514 23.8716 13.799 23.2595 16.2554H23.2593Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_311_199">
                        <rect width="38" height="38" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                    </span>
                    <span>
                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_311_204)">
                        <path d="M19 38C29.4934 38 38 29.4934 38 19C38 8.50659 29.4934 0 19 0C8.50659 0 0 8.50659 0 19C0 29.4934 8.50659 38 19 38Z" fill="#627EEA"/>
                        <path d="M19.5918 4.75V15.2831L28.4945 19.2612L19.5918 4.75Z" fill="white" fill-opacity="0.602"/>
                        <path d="M19.5914 4.75L10.6875 19.2612L19.5914 15.2831V4.75Z" fill="white"/>
                        <path d="M19.5918 26.0869V33.244L28.5004 20.9189L19.5918 26.0869Z" fill="white" fill-opacity="0.602"/>
                        <path d="M19.5914 33.244V26.0858L10.6875 20.9189L19.5914 33.244Z" fill="white"/>
                        <path d="M19.5918 24.4305L28.4945 19.2613L19.5918 15.2855V24.4305Z" fill="white" fill-opacity="0.2"/>
                        <path d="M10.6875 19.2613L19.5914 24.4305V15.2855L10.6875 19.2613Z" fill="white" fill-opacity="0.602"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_311_204">
                        <rect width="38" height="38" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                    </span>
                    <span>
                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g clip-path="url(#clip0_311_214)">
                        <path d="M38 0H0V38H38V0Z" fill="url(#pattern0)"/>
                        </g>
                        <defs>
                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_311_214" transform="scale(0.00130208 0.00130378)"/>
                        </pattern>
                        <clipPath id="clip0_311_214">
                        <rect width="38" height="38" fill="white"/>
                        </clipPath>
                        <image id="image0_311_214" width="768" height="767" xlink:href="data:image/png;base64,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"/>
                        </defs>
                        </svg>
                    </span>
                    <span>
                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_318_437)">
                        <path d="M19.4559 12.521H16.7412V17.8731H21.0122V20.114H16.7412V25.4657H19.5889C20.3206 25.4657 25.596 25.5483 25.5878 19.239C25.5796 12.9297 20.4713 12.521 19.4559 12.521Z" fill="#C2A633"/>
                        <path d="M19 0C8.50649 0 0 8.50649 0 19C0 29.4935 8.50649 38 19 38C29.4935 38 38 29.4935 38 19C38 8.50649 29.4935 0 19 0ZM19.7465 29.2619H12.8657V20.1142H10.4401V17.8733H12.8655V8.72499H18.771C20.1681 8.72499 29.4217 8.43486 29.4217 19.1651C29.4217 30.0728 19.7467 29.2619 19.7467 29.2619H19.7465Z" fill="#C2A633"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_318_437">
                        <rect width="38" height="38" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                    </span>
                    <span>
                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_311_216)">
                        <path d="M19 0C29.4922 0 38 8.50778 38 19C38 29.4922 29.4922 38 19 38C8.50778 38 0 29.4975 0 19C0 8.5025 8.50778 0 19 0Z" fill="#26A17B"/>
                        <path d="M21.6751 16.8815V14.0526H28.1404V9.74597H10.539V14.0526H17.0042V16.8815C11.7529 17.1243 7.7998 18.164 7.7998 19.4096C7.7998 20.6551 11.7529 21.6949 17.0042 21.9376V30.989H21.6804V21.9376C26.9265 21.6949 30.869 20.6551 30.869 19.4096C30.8637 18.164 26.9212 17.1243 21.6751 16.8815ZM21.6804 21.1724C21.5484 21.1776 20.8729 21.2199 19.3634 21.2199C18.1548 21.2199 17.3104 21.1882 17.0095 21.1724V21.1776C12.3704 20.9718 8.90286 20.1643 8.90286 19.1985C8.90286 18.2326 12.3651 17.4251 17.0095 17.2193V20.3649C17.3156 20.386 18.1812 20.4388 19.3845 20.4388C20.8254 20.4388 21.5484 20.3807 21.6856 20.3649V17.2088C26.3195 17.4146 29.7765 18.2221 29.7765 19.1879C29.7659 20.1538 26.309 20.9612 21.6804 21.1724Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_311_216">
                        <rect width="38" height="38" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
        <div class="d-grid add_transaction_btn">
            <a href="" class="btn" id="add_transaction_anchor" type="button" style="color: #FFF;">Add transaction</a>
        </div>
    </div>
    <script>
        let trans_btn = document.getElementById('add_transaction_anchor');
        let card_pay = document.getElementById("card_payment");
        let crypto_pay = document.getElementById("crypto_payment");

        card_pay.onclick = function() {
            card_pay.style.border = "1px solid black";
            crypto_pay.style.border = "none";
            trans_btn.href = "{{route('crypto.payment-with-card')}}";
            trans_btn.style.background = "#F4B42A";
            trans_btn.innerText = "Next";
        }


        crypto_pay.onclick = function() {
            crypto_pay.style.border = "1px solid black";
            card_pay.style.border = "none";
            trans_btn.href = "{{route('crypto.payment-with-crypto')}}";
            trans_btn.style.background = "#F4B42A";
            trans_btn.innerText = "Next";
        }
    </script>
</x-base-layout>