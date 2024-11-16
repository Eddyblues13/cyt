@include('dashboard.header')

<div class="container mx-auto px-[8px] border-b border-gray-700 pb-3">
    <div class="flex p-1 mt-2">
        <a class="text-[13px] px-2 pb-1 cursor-pointer text-white border-b-2 border-yellow-400" href="/markets">All
            Coins</a>

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
                            <span class="font-medium whitespace-nowrap text-white">BTC</span>
                            <span class="text-gray-400 text-[11px]">/USDT <i
                                    class="fi fi-ss-flame mt-1 text-[12px] text-yellow-400"></i></span>
                            <h1 class="text-[10px] text-gray-500">Bitcoin /TetherUS</h1>
                        </a>
                    </th>
                    <td class="px-2 pt-1 pb-2 text-end">
                        <a href="/trading/btc">
                            <h1 class="font-medium whitespace-nowrap text-white crypto-price">90499.00</h1>
                            <h1 class="text-[10px] text-gray-500 crypto-price-usd">$90499.00</h1>
                        </a>
                    </td>
                    <td class="px-2 pt-1 pb-2 text-center">
                        <a href="/trading/btc">
                            <h1 class="text-[10px] text-white bg-emerald-500 rounded-[5px] crypto-change">2.32%</h1>
                        </a>
                    </td>
                </tr>
                <tr data-symbol="eth">
                    <th class="px-2 pt-1 pb-2 font-medium whitespace-nowrap text-white">
                        <a href="/trading/eth">
                            <span class="font-medium whitespace-nowrap text-white">ETH</span>
                            <span class="text-gray-400 text-[11px]">/USDT <i
                                    class="fi fi-ss-flame mt-1 text-[12px] text-yellow-400"></i></span>
                            <h1 class="text-[10px] text-gray-500">Ethereum /TetherUS</h1>
                        </a>
                    </th>
                    <td class="px-2 pt-1 pb-2 text-end">
                        <a href="/trading/eth">
                            <h1 class="font-medium whitespace-nowrap text-white crypto-price">3150.02</h1>
                            <h1 class="text-[10px] text-gray-500 crypto-price-usd">$3150.02</h1>
                        </a>
                    </td>
                    <td class="px-2 pt-1 pb-2 text-center">
                        <a href="/trading/eth">
                            <h1 class="text-[10px] text-white bg-emerald-500 rounded-[5px] crypto-change">3.72%</h1>
                        </a>
                    </td>
                </tr>
                <tr data-symbol="usdt">
                    <th class="px-2 pt-1 pb-2 font-medium whitespace-nowrap text-white">
                        <a href="/trading/usdt">
                            <span class="font-medium whitespace-nowrap text-white">USDT</span>
                            <span class="text-gray-400 text-[11px]">/USDT <i
                                    class="fi fi-ss-flame mt-1 text-[12px] text-yellow-400"></i></span>
                            <h1 class="text-[10px] text-gray-500">Tether /TetherUS</h1>
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
                            <h1 class="text-[10px] text-white bg-rose-500 rounded-[5px] crypto-change">-0.31%</h1>
                        </a>
                    </td>
                </tr>
                <tr data-symbol="sol">
                    <th class="px-2 pt-1 pb-2 font-medium whitespace-nowrap text-white">
                        <a href="/trading/sol">
                            <span class="font-medium whitespace-nowrap text-white">SOL</span>
                            <span class="text-gray-400 text-[11px]">/USDT <i
                                    class="fi fi-ss-flame mt-1 text-[12px] text-yellow-400"></i></span>
                            <h1 class="text-[10px] text-gray-500">Solana /TetherUS</h1>
                        </a>
                    </th>
                    <td class="px-2 pt-1 pb-2 text-end">
                        <a href="/trading/sol">
                            <h1 class="font-medium whitespace-nowrap text-white crypto-price">214.57</h1>
                            <h1 class="text-[10px] text-gray-500 crypto-price-usd">$214.57</h1>
                        </a>
                    </td>
                    <td class="px-2 pt-1 pb-2 text-center">
                        <a href="/trading/sol">
                            <h1 class="text-[10px] text-white bg-emerald-500 rounded-[5px] crypto-change">2.86%</h1>
                        </a>
                    </td>
                </tr>
                <tr data-symbol="bnb">
                    <th class="px-2 pt-1 pb-2 font-medium whitespace-nowrap text-white">
                        <a href="/trading/bnb">
                            <span class="font-medium whitespace-nowrap text-white">BNB</span>
                            <span class="text-gray-400 text-[11px]">/USDT <i
                                    class="fi fi-ss-flame mt-1 text-[12px] text-yellow-400"></i></span>
                            <h1 class="text-[10px] text-gray-500">BNB /TetherUS</h1>
                        </a>
                    </th>
                    <td class="px-2 pt-1 pb-2 text-end">
                        <a href="/trading/bnb">
                            <h1 class="font-medium whitespace-nowrap text-white crypto-price">624.11</h1>
                            <h1 class="text-[10px] text-gray-500 crypto-price-usd">$624.11</h1>
                        </a>
                    </td>
                    <td class="px-2 pt-1 pb-2 text-center">
                        <a href="/trading/bnb">
                            <h1 class="text-[10px] text-white bg-emerald-500 rounded-[5px] crypto-change">3.02%</h1>
                        </a>
                    </td>
                </tr>
                <tr data-symbol="xrp">
                    <th class="px-2 pt-1 pb-2 font-medium whitespace-nowrap text-white">
                        <a href="/trading/xrp">
                            <span class="font-medium whitespace-nowrap text-white">XRP</span>
                            <span class="text-gray-400 text-[11px]">/USDT <i
                                    class="fi fi-ss-flame mt-1 text-[12px] text-yellow-400"></i></span>
                            <h1 class="text-[10px] text-gray-500">XRP /TetherUS</h1>
                        </a>
                    </th>
                    <td class="px-2 pt-1 pb-2 text-end">
                        <a href="/trading/xrp">
                            <h1 class="font-medium whitespace-nowrap text-white crypto-price">1.13</h1>
                            <h1 class="text-[10px] text-gray-500 crypto-price-usd">$1.13</h1>
                        </a>
                    </td>
                    <td class="px-2 pt-1 pb-2 text-center">
                        <a href="/trading/xrp">
                            <h1 class="text-[10px] text-white bg-emerald-500 rounded-[5px] crypto-change">29.57%</h1>
                        </a>
                    </td>
                </tr>
                <tr data-symbol="doge">
                    <th class="px-2 pt-1 pb-2 font-medium whitespace-nowrap text-white">
                        <a href="/trading/doge">
                            <span class="font-medium whitespace-nowrap text-white">DOGE</span>
                            <span class="text-gray-400 text-[11px]">/USDT <i
                                    class="fi fi-ss-flame mt-1 text-[12px] text-yellow-400"></i></span>
                            <h1 class="text-[10px] text-gray-500">Dogecoin /TetherUS</h1>
                        </a>
                    </th>
                    <td class="px-2 pt-1 pb-2 text-end">
                        <a href="/trading/doge">
                            <h1 class="font-medium whitespace-nowrap text-white crypto-price">0.37</h1>
                            <h1 class="text-[10px] text-gray-500 crypto-price-usd">$0.37</h1>
                        </a>
                    </td>
                    <td class="px-2 pt-1 pb-2 text-center">
                        <a href="/trading/doge">
                            <h1 class="text-[10px] text-white bg-emerald-500 rounded-[5px] crypto-change">2.14%</h1>
                        </a>
                    </td>
                </tr>
                <tr data-symbol="usdc">
                    <th class="px-2 pt-1 pb-2 font-medium whitespace-nowrap text-white">
                        <a href="/trading/usdc">
                            <span class="font-medium whitespace-nowrap text-white">USDC</span>
                            <span class="text-gray-400 text-[11px]">/USDT <i
                                    class="fi fi-ss-flame mt-1 text-[12px] text-yellow-400"></i></span>
                            <h1 class="text-[10px] text-gray-500">USDC /TetherUS</h1>
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
                            <h1 class="text-[10px] text-white bg-emerald-500 rounded-[5px] crypto-change">0.05%</h1>
                        </a>
                    </td>
                </tr>
                <tr data-symbol="steth">
                    <th class="px-2 pt-1 pb-2 font-medium whitespace-nowrap text-white">
                        <a href="/trading/steth">
                            <span class="font-medium whitespace-nowrap text-white">STETH</span>
                            <span class="text-gray-400 text-[11px]">/USDT <i
                                    class="fi fi-ss-flame mt-1 text-[12px] text-yellow-400"></i></span>
                            <h1 class="text-[10px] text-gray-500">Lido Staked Ether /TetherUS</h1>
                        </a>
                    </th>
                    <td class="px-2 pt-1 pb-2 text-end">
                        <a href="/trading/steth">
                            <h1 class="font-medium whitespace-nowrap text-white crypto-price">3147.32</h1>
                            <h1 class="text-[10px] text-gray-500 crypto-price-usd">$3147.32</h1>
                        </a>
                    </td>
                    <td class="px-2 pt-1 pb-2 text-center">
                        <a href="/trading/steth">
                            <h1 class="text-[10px] text-white bg-emerald-500 rounded-[5px] crypto-change">4.19%</h1>
                        </a>
                    </td>
                </tr>
                <tr data-symbol="ada">
                    <th class="px-2 pt-1 pb-2 font-medium whitespace-nowrap text-white">
                        <a href="/trading/ada">
                            <span class="font-medium whitespace-nowrap text-white">ADA</span>
                            <span class="text-gray-400 text-[11px]">/USDT <i
                                    class="fi fi-ss-flame mt-1 text-[12px] text-yellow-400"></i></span>
                            <h1 class="text-[10px] text-gray-500">Cardano /TetherUS</h1>
                        </a>
                    </th>
                    <td class="px-2 pt-1 pb-2 text-end">
                        <a href="/trading/ada">
                            <h1 class="font-medium whitespace-nowrap text-white crypto-price">0.78</h1>
                            <h1 class="text-[10px] text-gray-500 crypto-price-usd">$0.78</h1>
                        </a>
                    </td>
                    <td class="px-2 pt-1 pb-2 text-center">
                        <a href="/trading/ada">
                            <h1 class="text-[10px] text-white bg-emerald-500 rounded-[5px] crypto-change">19.72%</h1>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>


    </div>
</div>
@include('dashboard.footer')