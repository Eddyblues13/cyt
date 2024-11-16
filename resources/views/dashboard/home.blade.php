@include('dashboard.header')


<div class="container mx-auto px-[8px] border-b border-gray-700 pb-3">
    <div class="flex p-1 mt-2">
        <a class="text-[13px] px-2 pb-1 cursor-pointer text-white border-b-2 border-yellow-400" href="/panel">Hot</a>

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
            style="text-decoration: none; color: rgb(157, 178, 189);"><span style="color: rgb(41, 98, 255);">Technical
                Analysis for BINANCE:BTCUSDT </span></a>By
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
            style="text-decoration: none; color: rgb(157, 178, 189);"><span style="color: rgb(41, 98, 255);">Daily
                cryptocurrency news </span></a>By TradingView
    </div>
</div>

@include('dashboard.footer')