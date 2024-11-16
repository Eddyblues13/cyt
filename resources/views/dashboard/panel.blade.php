<html lang="en" style="height: 100%;">

<head>
    <meta charset="UTF-8">
    <meta name="cryptomus" content="ae4eb0c6">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="icon" type="image/svg+xml" href="/assets/logo-DT4PA2fC.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TradeFortuneSphere</title>
    <link rel="stylesheet" href="auth/style.css">
    <link rel="stylesheet" href="auth/notify.css">
    <script type="module" crossorigin="" src="/assets/index-DI-YDz6l.js"></script>
    <link rel="stylesheet" crossorigin="" href="/assets/index-C2R-b3xq.css">
    <style>
        /* CSS for the loading screen */

        .loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #F7F6FE;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .loading-content {
            text-align: center;
        }

        .loading-logo {
            width: 60px;
            height: 60px;
            border-radius: 15px;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .loading-text {
            font-weight: bold;
            font-size: 20px;
            color: #F5D042;
            margin-top: 20px;
        }

        .loading-version {
            color: #CCCCCC;
            position: absolute;
            bottom: 20px;
        }
    </style>
    <style>
        .drawer-open {
            transform: translateX(0);
        }
    </style>
    <meta name="csrf-token" content="B4WT0ov5r6ZFMNL3kZqizewI950ssW0KbxxL1lSX">

    <link rel="stylesheet" crossorigin="" href="/assets/notify.css">



    <link type="text/css" rel="stylesheet" charset="UTF-8"
        href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.26tY-h6gH9w.L.W.O/am=AgM/d=0/rs=AN8SPfrixlL1amy8r1f0UQHcZ2HL9amUjg/m=el_main_css">
    <script type="text/javascript" charset="UTF-8"
        src="https://translate.googleapis.com/_/translate_http/_/js/k=translate_http.tr.en_GB.AtoVr6uC3kM.O/am=ABA/d=1/exm=el_conf/ed=1/rs=AN8SPfoI1UbWfUi1jgwfWJ2WWKSHJndeaA/m=el_main">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>

<body class="min-h-[100vh] bg-binance mx-auto max-w-[480px]" style="position: relative; min-height: 100%; top: 0px;">
    <div class="grid justify-items-center h-[calc(100vh-7rem)] " style="color:#252c37" id="loading-screen">
        <div style="color:#252c37" class="-mt-[100px] self-end flex flex-col items-center ">
            <img src="/assets/logo-DT4PA2fC.png" alt="Loading..." class="w-[60px] h-[60px] rounded-[15px] animate-spin">
            <div class="font-bold text-[20px] text-yellow-500 mt-3">Loading...</div>
        </div>
        <div class="self-end text-gray-200">version 1.0</div>
    </div>


    <div id="app">
        <div class="pt-[66px] pb-[63px]">


            <nav class="topnav-user fixed w-[100%] top-0 border-gray-200 bg-binance z-[5] max-w-[480px] mx-auto">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 py-4">
                    <div id="nav-toggle" class="flex items-center gap-x-2"><img src="/assets/logo-DT4PA2fC.png"
                            class="h-8 p-1.5 bg-gray-700/50 rounded-[10px] cursor-pointer" alt="BNB Chain Logo"><span
                            class="self-center text-[20px] font-medium whitespace-nowrap text-gray-200 cursor-pointer">TradeFortuneSphere</span>
                    </div>
                    <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                        <a class="flex text-[20px] md:me-0 z-10" href="/contact/support">
                            <span class="sr-only">
                                Help</span>
                            <i class="fi fi-sr-user-headset text-[16px] text-gray-300 px-1 leading-[0px]">

                            </i>
                        </a>
                    </div>

                </div>
            </nav>
            <div id="drawer-navigation"
                class="fixed top-0 left-0 z-[60] w-[100%] h-screen p-4 overflow-y-auto transition-transform duration-[500ms] -translate-x-full bg-gray-800">
                <button id="drawer-close" type="button"
                    class="text-gray-400 bg-transparent rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center hover:bg-gray-600 hover:text-white">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd">

                        </path>
                    </svg>
                    <span class="sr-only">
                        Close menu</span>
                </button>


                <div class="flex mt-6 gap-3 items-center border-b border-gray-700 pb-4">
                    <div class="bg-gray-700 rounded-lg w-[60px] h-[60px] p-2.5"><img class="w-auto"
                            src="data:image/png;base64,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">
                    </div>
                    <div class="flex-auto">
                        <p class="text-[11px] text-gray-400">REFERRAL ID: Ref-mxquvw2j173da3 <i
                                class="fi fi-rr-copy-alt cursor-pointer"></i></p>
                        <h1 class="font-bold mb-1">Blues Wayne
                        </h1>
                        <p class="text-[10px] text-red-400 bg-red-400/25 w-[50px] text-center rounded-[3px]">
                            Unverified</p>
                    </div>
                </div>

                <div class="py-4 overflow-y-auto">
                    <ul class="space-y-2 font-medium">
                        <li>
                            <a class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group" href="/">
                                <i class="fi fi-rr-apps mt-1">

                                </i>
                                <span class="ms-3 text-gray-400">
                                    Home
                                </span>
                            </a>
                            <a class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group"
                                href="/deposit">
                                <i class="fi fi-rr-badge-dollar mt-1"></i><span class="ms-3 text-gray-400">
                                    Deposit
                                </span></a>
                            <a class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group"
                                href="/deposit/logs">
                                <i class="fi fi-rr-newspaper mt-1"></i><span class="ms-3 text-gray-400">Deposit Logs
                                </span>
                            </a>
                            <a class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group"
                                href="/withdraw">
                                <i class="fi fi-rr-wallet mt-1"></i><span class="ms-3 text-gray-400">Withdraw</span></a>
                            <a class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group"
                                href="/withdraw/logs">
                                <i class="fi fi-rr-newspaper mt-1"></i><span class="ms-3 text-gray-400">Withdraw
                                    Logs</span></a>
                            <!-- <a class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group" href="/transfer/logs">
                                <i class="fi fi-rr-exchange mt-1"></i><span class="ms-3 text-gray-400">Transfer Logs</span>
                            </a> -->
                            <!-- <a class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group" href="/commissions">
                                <i class="fi fi-rr-tax-alt mt-1"></i><span class="ms-3 text-gray-400">Commissions</span>
                            </a> -->
                            <!-- <a class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group" href="https://app.tradefortunesphere.cc/certificate">
                                <i class="fi fi-rr-receipt mt-1"></i><span class="ms-3 text-gray-400">Certificate</span></a> -->
                            <!-- <a class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group" href="#">
                                <i class="fi fi-rr-user-add mt-1"></i><span class="ms-3 text-gray-400">Referral</span></a> -->
                            <a class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group"
                                href="https://app.tradefortunesphere.cc/kyc-center">
                                <i class="fi fi-rr-id-badge mt-1"></i>
                                <span class="ms-3 text-gray-400">KYC Center</span>
                            </a>
                            <a class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group"
                                href="https://app.tradefortunesphere.cc/settings">
                                <i class="fi fi-rr-settings mt-1"></i><span class="ms-3 text-gray-400">
                                    Settings</span></a>
                            <!-- Add this form somewhere in your Blade template -->
                            <form id="logout-form" action="https://app.tradefortunesphere.cc/logout" method="POST"
                                style="display: none;">
                                <input type="hidden" name="_token" value="B4WT0ov5r6ZFMNL3kZqizewI950ssW0KbxxL1lSX">
                            </form>

                            <!-- Add the logout button -->
                            <div class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group cursor-pointer"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fi fi-rr-power mt-1"></i>
                                <span class="ms-3 text-gray-400">Logout</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container mx-auto px-[12px] border-b border-gray-700 pb-3">
                <div class="flex items-center">
                    <div class="text-start flex-auto">
                        <h1 class="text-[12px] text-gray-300">Total Balance (USDT)</h1>
                        <h1 class="text-[24px] font-bold text-gray-100">0.00</h1>
                        <h1 class="text-[10px] text-gray-400 flex items-center">≈ 0.00$</h1>
                    </div>
                    <div class=""><a
                            class="bg-yellow-400 hover:bg-yellow-500 !text-gray-800 text-[12px] px-4 !py-2 shadow-sm shadow-gray-800 rounded-[5px]"
                            href="/deposit">Deposit</a></div>
                </div>
            </div>


            <div id="kycPopup"
                class="fixed inset-0 bg-gray-900 bg-opacity-90 z-50 flex items-center justify-center hidden">
                <div class="bg-gray-800 p-8 rounded-lg max-w-md w-full mx-4">
                    <h2 class="text-2xl font-bold text-yellow-400 mb-4">Account Verification Required
                    </h2>
                    <p class="text-gray-300 mb-6">Your account is not verified. Complete KYC to unlock all features and
                        enhance your trading experience.</p>
                    <a href="https://app.tradefortunesphere.cc/kyc-center"
                        class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-2 px-4 rounded inline-block mb-4">Complete
                        KYC Now</a>
                    <button id="closeKycPopup" class="text-gray-400 hover:text-white mt-4">Close</button>
                </div>
            </div>


            <div class="container mx-auto px-[8px] border-b border-gray-700 pb-3">
                <div class="flex p-1 mt-2">
                    <a class="text-[13px] px-2 pb-1 cursor-pointer text-white border-b-2 border-yellow-400"
                        href="/panel">Hot</a>

                </div>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-[10px] text-gray-400">
                            <tr>
                                <th scope="col" class="px-2 pt-3 pb-0">Name</th>
                                <th scope="col" class="px-2 pt-3 pb-0 text-end">Last Price</th>
                                <th scope="col" class="px-2 pt-3 pb-0 text-end">24h chg%</th>
                            </tr>
                        </thead>
                        <tbody id="crypto-table-body">

                            <tr data-symbol="btc">
                                <th class="px-2 pt-1 pb-2 font-medium whitespace-nowrap text-white">
                                    <a href="/trading/btc">
                                        <span class="font-medium whitespace-nowrap text-white">BTC</span><span
                                            class="text-gray-400 text-[11px]">/USDT <i
                                                class="fi fi-ss-flame mt-1 text-[12px] text-yellow-400"></i></span>
                                        <h1 class="text-[10px] text-gray-500">Bitcoin/TetherUS</h1>
                                    </a>
                                </th>
                                <td class="px-2 pt-1 pb-2 text-end">
                                    <a href="/trading/btc">
                                        <h1 class="font-medium whitespace-nowrap text-white crypto-price">89296.00</h1>
                                        <h1 class="text-[10px] text-gray-500 crypto-price-usd">$89296.00</h1>
                                    </a>
                                </td>
                                <td class="px-2 pt-1 pb-2 text-center">
                                    <a href="/trading/btc">
                                        <h1 class="text-[10px] text-white bg-emerald-500 rounded-[5px] crypto-change">
                                            0.18%</h1>
                                    </a>
                                </td>
                            </tr>

                            <tr data-symbol="eth">
                                <th class="px-2 pt-1 pb-2 font-medium whitespace-nowrap text-white">
                                    <a href="/trading/eth">
                                        <span class="font-medium whitespace-nowrap text-white">ETH</span><span
                                            class="text-gray-400 text-[11px]">/USDT <i
                                                class="fi fi-ss-flame mt-1 text-[12px] text-yellow-400"></i></span>
                                        <h1 class="text-[10px] text-gray-500">Ethereum/TetherUS</h1>
                                    </a>
                                </th>
                                <td class="px-2 pt-1 pb-2 text-end">
                                    <a href="/trading/eth">
                                        <h1 class="font-medium whitespace-nowrap text-white crypto-price">3019.42</h1>
                                        <h1 class="text-[10px] text-gray-500 crypto-price-usd">$3019.42</h1>
                                    </a>
                                </td>
                                <td class="px-2 pt-1 pb-2 text-center">
                                    <a href="/trading/eth">
                                        <h1 class="text-[10px] text-white bg-rose-500 rounded-[5px] crypto-change">
                                            -3.62%</h1>
                                    </a>
                                </td>
                            </tr>

                            <tr data-symbol="usdt">
                                <th class="px-2 pt-1 pb-2 font-medium whitespace-nowrap text-white">
                                    <a href="/trading/usdt">
                                        <span class="font-medium whitespace-nowrap text-white">USDT</span><span
                                            class="text-gray-400 text-[11px]">/USDT <i
                                                class="fi fi-ss-flame mt-1 text-[12px] text-yellow-400"></i></span>
                                        <h1 class="text-[10px] text-gray-500">Tether/TetherUS</h1>
                                    </a>
                                </th>
                                <td class="px-2 pt-1 pb-2 text-end">
                                    <a href="/trading/usdt">
                                        <h1 class="font-medium whitespace-nowrap text-white crypto-price">1.00</h1>
                                        <h1 class="text-[10px] text-gray-500 crypto-price-usd">$1.00</h1>
                                    </a>
                                </td>
                                <td class="px-2 pt-1 pb-2 text-center">
                                    <a href="/trading/usdt">
                                        <h1 class="text-[10px] text-white bg-rose-500 rounded-[5px] crypto-change">
                                            -0.02%</h1>
                                    </a>
                                </td>
                            </tr>

                            <tr data-symbol="sol">
                                <th class="px-2 pt-1 pb-2 font-medium whitespace-nowrap text-white">
                                    <a href="/trading/sol">
                                        <span class="font-medium whitespace-nowrap text-white">SOL</span><span
                                            class="text-gray-400 text-[11px]">/USDT <i
                                                class="fi fi-ss-flame mt-1 text-[12px] text-yellow-400"></i></span>
                                        <h1 class="text-[10px] text-gray-500">Solana/TetherUS</h1>
                                    </a>
                                </th>
                                <td class="px-2 pt-1 pb-2 text-end">
                                    <a href="/trading/sol">
                                        <h1 class="font-medium whitespace-nowrap text-white crypto-price">210.06</h1>
                                        <h1 class="text-[10px] text-gray-500 crypto-price-usd">$210.06</h1>
                                    </a>
                                </td>
                                <td class="px-2 pt-1 pb-2 text-center">
                                    <a href="/trading/sol">
                                        <h1 class="text-[10px] text-white bg-rose-500 rounded-[5px] crypto-change">
                                            -2.05%</h1>
                                    </a>
                                </td>
                            </tr>

                            <tr data-symbol="bnb">
                                <th class="px-2 pt-1 pb-2 font-medium whitespace-nowrap text-white">
                                    <a href="/trading/bnb">
                                        <span class="font-medium whitespace-nowrap text-white">BNB</span><span
                                            class="text-gray-400 text-[11px]">/USDT <i
                                                class="fi fi-ss-flame mt-1 text-[12px] text-yellow-400"></i></span>
                                        <h1 class="text-[10px] text-gray-500">BNB/TetherUS</h1>
                                    </a>
                                </th>
                                <td class="px-2 pt-1 pb-2 text-end">
                                    <a href="/trading/bnb">
                                        <h1 class="font-medium whitespace-nowrap text-white crypto-price">610.49</h1>
                                        <h1 class="text-[10px] text-gray-500 crypto-price-usd">$610.49</h1>
                                    </a>
                                </td>
                                <td class="px-2 pt-1 pb-2 text-center">
                                    <a href="/trading/bnb">
                                        <h1 class="text-[10px] text-white bg-rose-500 rounded-[5px] crypto-change">
                                            -4.10%</h1>
                                    </a>
                                </td>
                            </tr>

                            <tr data-symbol="doge">
                                <th class="px-2 pt-1 pb-2 font-medium whitespace-nowrap text-white">
                                    <a href="/trading/doge">
                                        <span class="font-medium whitespace-nowrap text-white">DOGE</span><span
                                            class="text-gray-400 text-[11px]">/USDT <i
                                                class="fi fi-ss-flame mt-1 text-[12px] text-yellow-400"></i></span>
                                        <h1 class="text-[10px] text-gray-500">Dogecoin/TetherUS</h1>
                                    </a>
                                </th>
                                <td class="px-2 pt-1 pb-2 text-end">
                                    <a href="/trading/doge">
                                        <h1 class="font-medium whitespace-nowrap text-white crypto-price">0.36</h1>
                                        <h1 class="text-[10px] text-gray-500 crypto-price-usd">$0.36</h1>
                                    </a>
                                </td>
                                <td class="px-2 pt-1 pb-2 text-center">
                                    <a href="/trading/doge">
                                        <h1 class="text-[10px] text-white bg-rose-500 rounded-[5px] crypto-change">
                                            -7.94%</h1>
                                    </a>
                                </td>
                            </tr>

                            <tr data-symbol="xrp">
                                <th class="px-2 pt-1 pb-2 font-medium whitespace-nowrap text-white">
                                    <a href="/trading/xrp">
                                        <span class="font-medium whitespace-nowrap text-white">XRP</span><span
                                            class="text-gray-400 text-[11px]">/USDT <i
                                                class="fi fi-ss-flame mt-1 text-[12px] text-yellow-400"></i></span>
                                        <h1 class="text-[10px] text-gray-500">XRP/TetherUS</h1>
                                    </a>
                                </th>
                                <td class="px-2 pt-1 pb-2 text-end">
                                    <a href="/trading/xrp">
                                        <h1 class="font-medium whitespace-nowrap text-white crypto-price">0.88</h1>
                                        <h1 class="text-[10px] text-gray-500 crypto-price-usd">$0.88</h1>
                                    </a>
                                </td>
                                <td class="px-2 pt-1 pb-2 text-center">
                                    <a href="/trading/xrp">
                                        <h1 class="text-[10px] text-white bg-emerald-500 rounded-[5px] crypto-change">
                                            13.47%</h1>
                                    </a>
                                </td>
                            </tr>

                            <tr data-symbol="usdc">
                                <th class="px-2 pt-1 pb-2 font-medium whitespace-nowrap text-white">
                                    <a href="/trading/usdc">
                                        <span class="font-medium whitespace-nowrap text-white">USDC</span><span
                                            class="text-gray-400 text-[11px]">/USDT <i
                                                class="fi fi-ss-flame mt-1 text-[12px] text-yellow-400"></i></span>
                                        <h1 class="text-[10px] text-gray-500">USDC/TetherUS</h1>
                                    </a>
                                </th>
                                <td class="px-2 pt-1 pb-2 text-end">
                                    <a href="/trading/usdc">
                                        <h1 class="font-medium whitespace-nowrap text-white crypto-price">1.00</h1>
                                        <h1 class="text-[10px] text-gray-500 crypto-price-usd">$1.00</h1>
                                    </a>
                                </td>
                                <td class="px-2 pt-1 pb-2 text-center">
                                    <a href="/trading/usdc">
                                        <h1 class="text-[10px] text-white bg-rose-500 rounded-[5px] crypto-change">
                                            -0.05%</h1>
                                    </a>
                                </td>
                            </tr>

                            <tr data-symbol="steth">
                                <th class="px-2 pt-1 pb-2 font-medium whitespace-nowrap text-white">
                                    <a href="/trading/steth">
                                        <span class="font-medium whitespace-nowrap text-white">STETH</span><span
                                            class="text-gray-400 text-[11px]">/USDT <i
                                                class="fi fi-ss-flame mt-1 text-[12px] text-yellow-400"></i></span>
                                        <h1 class="text-[10px] text-gray-500">Lido Staked Ether/TetherUS</h1>
                                    </a>
                                </th>
                                <td class="px-2 pt-1 pb-2 text-end">
                                    <a href="/trading/steth">
                                        <h1 class="font-medium whitespace-nowrap text-white crypto-price">3016.87</h1>
                                        <h1 class="text-[10px] text-gray-500 crypto-price-usd">$3016.87</h1>
                                    </a>
                                </td>
                                <td class="px-2 pt-1 pb-2 text-center">
                                    <a href="/trading/steth">
                                        <h1 class="text-[10px] text-white bg-rose-500 rounded-[5px] crypto-change">
                                            -3.63%</h1>
                                    </a>
                                </td>
                            </tr>

                            <tr data-symbol="ada">
                                <th class="px-2 pt-1 pb-2 font-medium whitespace-nowrap text-white">
                                    <a href="/trading/ada">
                                        <span class="font-medium whitespace-nowrap text-white">ADA</span><span
                                            class="text-gray-400 text-[11px]">/USDT <i
                                                class="fi fi-ss-flame mt-1 text-[12px] text-yellow-400"></i></span>
                                        <h1 class="text-[10px] text-gray-500">Cardano/TetherUS</h1>
                                    </a>
                                </th>
                                <td class="px-2 pt-1 pb-2 text-end">
                                    <a href="/trading/ada">
                                        <h1 class="font-medium whitespace-nowrap text-white crypto-price">0.66</h1>
                                        <h1 class="text-[10px] text-gray-500 crypto-price-usd">$0.66</h1>
                                    </a>
                                </td>
                                <td class="px-2 pt-1 pb-2 text-center">
                                    <a href="/trading/ada">
                                        <h1 class="text-[10px] text-white bg-emerald-500 rounded-[5px] crypto-change">
                                            19.14%</h1>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!--<script>-->
                    <!--    document.addEventListener('DOMContentLoaded', function() {-->
                    <!--        function updatePrices() {-->
                    <!--            fetch('/api/crypto-data')-->
                    <!--                .then(response => response.json())-->
                    <!--                .then(data => {-->
                    <!--                    data.forEach(crypto => {-->
                    <!--                        const row = document.querySelector(`tr[data-symbol="${crypto.symbol}"]`);-->
                    <!--                        if (row) {-->
                    <!--                            row.querySelector('.crypto-price').textContent = crypto.price;-->
                    <!--                            row.querySelector('.crypto-price-usd').textContent = crypto.price_usd;-->
                    <!--                            const changeElement = row.querySelector('.crypto-change');-->
                    <!--                            changeElement.textContent = crypto.change;-->
                    <!--                            changeElement.className = `text-[10px] text-white ${crypto.change_class} rounded-[5px] crypto-change`;-->
                    <!--                        }-->
                    <!--                    });-->
                    <!--                })-->
                    <!--                .catch(error => {-->
                    <!--                    console.error('Error updating crypto prices:', error);-->

                    <!--                    const errorMessage = 'An error occurred while updating crypto prices. Please try again later.';-->
                    <!--                    const errorElement = document.createElement('div');-->
                    <!--                    errorElement.className = 'bg-red-500 text-white p-2 rounded';-->
                    <!--                    errorElement.textContent = errorMessage;-->
                    <!--                    document.body.appendChild(errorElement);-->
                    <!--                });-->
                    <!--        }-->

                    <!--    });-->
                    <!--</script>-->
                </div>
            </div>
            <h1 class="text-center text-white font-semibold text-[20px] mt-2 mb-1">Technical Analysis</h1>
            <div style="display: contents;">
                <div style="display: contents;">
                    <div style="width: 100%; height: 450px;">
                        <style>
                            .tradingview-widget-copyright {
                                font-size: 13px !important;
                                line-height: 32px !important;
                                text-align: center !important;
                                vertical-align: middle !important;
                                /* @mixin sf-pro-display-font; */
                                font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
                                color: #B2B5BE !important;
                            }

                            .tradingview-widget-copyright .blue-text {
                                color: #2962FF !important;
                            }

                            .tradingview-widget-copyright a {
                                text-decoration: none !important;
                                color: #B2B5BE !important;
                            }

                            .tradingview-widget-copyright a:visited {
                                color: #B2B5BE !important;
                            }

                            .tradingview-widget-copyright a:hover .blue-text {
                                color: #1E53E5 !important;
                            }

                            .tradingview-widget-copyright a:active .blue-text {
                                color: #1848CC !important;
                            }

                            .tradingview-widget-copyright a:visited .blue-text {
                                color: #2962FF !important;
                            }
                        </style><iframe scrolling="no" allowtransparency="true" frameborder="0"
                            src="https://www.tradingview-widget.com/embed-widget/technical-analysis/?locale=en#%7B%22interval%22%3A%221m%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A450%2C%22isTransparent%22%3Afalse%2C%22symbol%22%3A%22BINANCE%3ABTCUSDT%22%2C%22showIntervalTabs%22%3Atrue%2C%22colorTheme%22%3A%22dark%22%2C%22utm_source%22%3A%22TradeKing-mu.vercel.app%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22technical-analysis%22%2C%22page-uri%22%3A%22TradeKing-mu.vercel.app%2F%22%7D"
                            title="technical analysis TradingView widget" lang="en"
                            style="user-select: none; box-sizing: border-box; display: block; height: 100%; width: 100%;"></iframe>
                    </div>
                </div>
                <div class="tradingview-widget-copyright"
                    style="font-size: 13px; line-height: 32px; text-align: center; font-family: &quot;Trebuchet MS&quot;, Arial, sans-serif; color: rgb(157, 178, 189);">
                    <a href="https://www.tradingview.com/symbols/BINANCE-BTCUSDT/technicals/" target="_blank"
                        style="text-decoration: none; color: rgb(157, 178, 189);"><span
                            style="color: rgb(41, 98, 255);">Technical Analysis for BINANCE:BTCUSDT </span></a>By
                    TradingView
                </div>
            </div>
            <div style="display: contents;">
                <div style="display: contents;">
                    <div style="width: 100%; height: 400px;">
                        <style>
                            .tradingview-widget-copyright {
                                font-size: 13px !important;
                                line-height: 32px !important;
                                text-align: center !important;
                                vertical-align: middle !important;
                                /* @mixin sf-pro-display-font; */
                                font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
                                color: #B2B5BE !important;
                            }

                            .tradingview-widget-copyright .blue-text {
                                color: #2962FF !important;
                            }

                            .tradingview-widget-copyright a {
                                text-decoration: none !important;
                                color: #B2B5BE !important;
                            }

                            .tradingview-widget-copyright a:visited {
                                color: #B2B5BE !important;
                            }

                            .tradingview-widget-copyright a:hover .blue-text {
                                color: #1E53E5 !important;
                            }

                            .tradingview-widget-copyright a:active .blue-text {
                                color: #1848CC !important;
                            }

                            .tradingview-widget-copyright a:visited .blue-text {
                                color: #2962FF !important;
                            }
                        </style><iframe scrolling="no" allowtransparency="true" frameborder="0"
                            src="https://www.tradingview-widget.com/embed-widget/timeline/?locale=en&amp;market=crypto#%7B%22width%22%3A%22100%25%22%2C%22height%22%3A400%2C%22market%22%3A%22crypto%22%2C%22colorTheme%22%3A%22dark%22%2C%22isTransparent%22%3Afalse%2C%22displayMode%22%3A%22regular%22%2C%22utm_source%22%3A%22TradeKing-mu.vercel.app%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22timeline%22%2C%22page-uri%22%3A%22TradeKing-mu.vercel.app%2F%22%7D"
                            title="timeline TradingView widget" lang="en"
                            style="user-select: none; box-sizing: border-box; display: block; height: 100%; width: 100%;"></iframe>
                    </div>
                </div>
                <div class="tradingview-widget-copyright"
                    style="font-size: 13px; line-height: 32px; text-align: center; font-family: &quot;Trebuchet MS&quot;, Arial, sans-serif; color: rgb(157, 178, 189);">
                    <a href="https://www.tradingview.com/markets/cryptocurrencies/key-events/" target="_blank"
                        style="text-decoration: none; color: rgb(157, 178, 189);"><span
                            style="color: rgb(41, 98, 255);">Daily cryptocurrency news </span></a>By TradingView
                </div>
            </div>


            <div id="error">
                <div style="position: fixed; z-index: 9999; inset: 16px; pointer-events: none;">
                    <div class="go4109123758"
                        style="left: 0px; right: 0px; display: flex; position: absolute; transition: all 230ms cubic-bezier(0.21, 1.02, 0.73, 1) 0s; transform: translateY(0px); top: 0px; justify-content: flex-end;">
                        <div class="go2072408551 !bg-gray-700/80 !text-white"
                            style="animation: 0.35s cubic-bezier(0.21, 1.02, 0.73, 1) 0s 1 normal forwards running go3223188581;">
                            <div class="go685806154">
                                <div class="go1858758034"></div>
                                <div class="go1579819456">
                                    <div class="go2534082608"></div>
                                </div>
                            </div>
                            <div role="status" id="errorContent" aria-live="polite" class="go3958317564">Invalid
                                Password</div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="success">
                <div style="position: fixed; z-index: 9999; inset: 16px; pointer-events: none;">
                    <div class="go4109123758"
                        style="left: 0px; right: 0px; display: flex; position: absolute; transition: all 230ms cubic-bezier(0.21, 1.02, 0.73, 1) 0s; transform: translateY(0px); top: 0px; justify-content: flex-end;">
                        <div class="go2072408551 !bg-gray-700/80 !text-white"
                            style="animation: 0.35s cubic-bezier(0.21, 1.02, 0.73, 1) 0s 1 normal forwards running go3223188581;">
                            <div class="go685806154">
                                <div class="go1858758034"></div>
                                <div class="go1579819456">
                                    <div class="go2344853693"></div>
                                </div>
                            </div>
                            <div role="status" id="successContent" aria-live="polite" class="go3958317564">Trade Open!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btm-nav bottomnav-user bg-binance z-[5] max-w-[480px] mx-auto">

                <a class="text-white bg-binance" href="/panel">
                    <i class="fi fi-sr-home leading-[0px] mb-[3px] text-[18px]"></i>
                    <span class="btm-nav-label text-[9px]">Home</span>
                </a>

                <a class="text-gray-400 bg-binance" href="/markets">
                    <i class="fi fi-sr-chart-simple leading-[0px] mb-[3px] text-[18px]">

                    </i><span class="btm-nav-label text-[9px]">Markets</span>
                </a>
                <a class="text-gray-400 bg-binance" href="/trading">
                    <i class="fi fi-sr-coins leading-[0px] mb-[3px] text-[18px]">

                    </i><span class="btm-nav-label text-[9px]">Trade</span>
                </a>
                <a class="text-gray-400 bg-binance" href="/orders">
                    <i class="fi fi-sr-ballot leading-[0px] mb-[3px] text-[18px]">

                    </i>
                    <span class="btm-nav-label text-[9px]">Orders</span>
                </a>

                <a class="text-gray-400 bg-binance" href="/invest">
                    <i class="fi fi-rr-exchange leading-[0px] mb-[3px] text-[18px]">

                    </i>
                    <span class="btm-nav-label text-[9px]">Invest</span>
                </a>

                <a class="text-gray-400 bg-binance" href="/wallets">
                    <i class="fi fi-sr-wallet leading-[0px] mb-[3px] text-[18px]">

                    </i>
                    <span class="btm-nav-label text-[9px]">Wallet</span>
                </a>

            </div>

        </div>
        <!-- <div style="position: fixed; z-index: 9999; inset: 16px; pointer-events: none;"></div> -->
    </div>


    <script>
        document.getElementById('nav-toggle').addEventListener('click', function() {
            document.getElementById('drawer-navigation').classList.add('drawer-open');
        });

        document.getElementById('drawer-close').addEventListener('click', function() {
            document.getElementById('drawer-navigation').classList.remove('drawer-open');
        });

        // JavaScript to hide the loading screen once the page is fully loaded
        document.addEventListener("DOMContentLoaded", function() {
            const loadingScreen = document.getElementById('loading-screen');
            loadingScreen.style.display = 'none';
            const main = document.getElementById('app');
            main.style.display = 'block';
        });

        function goBack() {
            history.back();
        }
    </script>
    <script src="/assets/js/core.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const kycPopup = document.getElementById('kycPopup');
            const closeKycPopup = document.getElementById('closeKycPopup');

            if (kycPopup) {
                // Show the popup when the page loads
                kycPopup.classList.remove('hidden');

                // Close the popup when the close button is clicked
                if (closeKycPopup) {
                    closeKycPopup.addEventListener('click', function() {
                        kycPopup.classList.add('hidden');
                    });
                }

                // Close the popup when clicking outside the content
                kycPopup.addEventListener('click', function(event) {
                    if (event.target === kycPopup) {
                        kycPopup.classList.add('hidden');
                    }
                });
            }
        });
    </script>
</body>

</html>