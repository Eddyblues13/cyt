@include('dashboard.header')

<div class="border border-gray-700 h-[calc(100vh-285px)] w-full mt-16">
    <article id="tradingview-widget" style="width: 100%; height: 100%;">
        <div id="tradingview-wrapper" style="position: relative; box-sizing: content-box; width: 100%; height: 100%;">
            <iframe title="advanced chart TradingView widget" lang="en" id="tradingview-frame" frameborder="0"
                allowtransparency="true" scrolling="no" allowfullscreen="true"
                src="https://s.tradingview.com/widgetembed/?hideideas=1&amp;locale=en#%7B%22symbol%22%3A%22BINANCE%3ABTCUSDT%22%2C%22interval%22%3A%221%22%2C%22hide_side_toolbar%22%3A%221%22%2C%22allow_symbol_change%22%3A%221%22%2C%22save_image%22%3A%221%22%2C%22backgroundColor%22%3A%22%23202630%22%2C%22theme%22%3A%22Dark%22%2C%22style%22%3A%221%22%2C%22timezone%22%3A%22Etc%2FUTC%22%7D"
                style="width: 100%; height: 100%;"></iframe>
        </div>
    </article>
</div>
<div id="tradeDiv" style="display: none;" class="absolute top-[140px] left-[10px] ">
    <div class="bg-gray-700/95 border-2 border-emerald-500/80 rounded-[10px] px-2.5 my-1">
        <div class="flex gap-1 items-center text-[10px] text-white">
            <i class="fi fi-sr-up text-emerald-500 leading-[0px]"></i>
            <span id="openTrade">

            </span>
        </div>
    </div>

</div>
<!-- Timer and Amount -->
<div class="grid grid-cols-2 gap-3 mb-3 mt-1">
    <div>
        <label class="block mb-2 text-[12px] font-medium text-gray-500 text-start">Select Timer</label>
        <select id="select-time"
            class="text-gray-900 text-sm rounded-[5px] block w-full p-1.5 bg-gray-700 placeholder-gray-400 text-white outline-none h-11">
            <option value="0">Choose a time</option>
            <option value="0.5">30 Seconds</option>
            <option value="1">1 Minute</option>
            <option value="3">3 Minutes</option>
            <option value="5">5 Minutes</option>
            <option value="10">10 Minutes</option>
            <option value="30">30 Minutes</option>
            <option value="60">1 Hour</option>
        </select>
        <input type="text" name="coin" id="coin" hidden value="BTC">
    </div>
    <div class="w-100">
        <label class="block mb-2 text-[12px] font-medium text-gray-500 text-end">Enter Amount</label>
        <div class="relative flex items-center">
            <button id="decreaseBtn" type="button"
                class="bg-gray-100 bg-gray-700 border-0 text-gray-400 hover:text-gray-200 border rounded-s-[5px] p-3 h-11 outline-none">
                <i class="fi fi-sr-minus-circle"></i>
            </button>
            <input id="amountInput" type="text"
                class="border-x-0 h-11 text-center text-sm block w-full py-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-yellow-500 focus:border-yellow-500 focus:outline-none"
                placeholder="0.00" required value="0">
            <button id="increaseBtn" type="button"
                class="bg-gray-100 bg-gray-700 border-0 text-gray-400 hover:text-gray-200 border rounded-e-[5px] p-3 h-11 outline-none">
                <i class="fi fi-sr-add"></i>
            </button>
        </div>
    </div>
</div>

<!-- Buttons -->
<div class="grid grid-cols-2 gap-3 mb-3">
    <button id="downBtn" type="button"
        class="bg-gradient-to-r hover:bg-gradient-to-l bg-red-500 hover:bg-red-600 to-rose-600 text-white w-full p-2 rounded-[10px] py-2 rounded-[5px] flex px-2 justify-between">
        <span id="down">Down</span>
        <i class="fi fi-rr-arrow-small-down"></i>
    </button>
    <button id="upBtn" type="button"
        class="bg-gradient-to-r hover:bg-gradient-to-l bg-emerald-500 hover:bg-emerald-600 to-rose-600 text-white w-full p-2 rounded-[10px] py-2 rounded-[5px] flex px-2 justify-between">
        <span id="up">Up</span>
        <i class="fi fi-rr-arrow-small-up"></i>
    </button>
</div>
<!-- </div> -->
@include('dashboard.footer')