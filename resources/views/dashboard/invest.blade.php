@include('dashboard.header')
<nav class="topnav-user fixed w-[100%] top-0 border-gray-200 bg-binance z-[5] max-w-[480px] mx-auto">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 py-4">
        <div class="flex items-center gap-x-2">
            <div onclick="goBack()"
                class="pb-[2px] pt-1.5 px-2 hover:bg-gray-700 rounded-[5px] cursor-pointer self-center">
                <i class="fi fi-sr-angle-left text-gray-200 leading-[0px]">

                </i>
            </div>
            <span class="self-center text-[18px] font-medium whitespace-nowrap text-gray-200">
                Investment plans
            </span>
        </div>
        <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <a class="flex text-[20px] md:me-0 z-10" href="http://127.0.0.1:8000/dashboard/settings">
                <span class="sr-only">Help</span>
                <i class="fi fi-sr-user-headset text-[16px] text-gray-300 px-1 leading-[0px]">

                </i>
            </a>
        </div>
    </div>
</nav>
<div class="container mx-auto px-[8px]">
    <a class="border border-gray-700 rounded-xl p-4 flex items-center mb-2" href="/invest/1">
        <div class="pe-3">
            <i class="fi fi-sr-chart-simple text-gray-300"></i>
        </div>
        <div class="flex-auto">
            <h1 class="text-sm text-gray-300">Elite package </h1>
            <h2 class="text-[10px] text-gray-500">Minimum: $3,000.00</h2>
            <h2 class="text-[10px] text-gray-500">Maximum: $9,999.00</h2>
            <h2 class="text-[10px] text-gray-500">Duration: 14 days</h2>
            <h1 class="text-[10px] text-gray-500">Profit: 10 % daily</h1>
        </div>
        <div class="mt-1">
            <i class="fi fi-sr-angle-small-right text-gray-500"></i>
        </div>
    </a>

    <a class="border border-gray-700 rounded-xl p-4 flex items-center mb-2" href="/invest/2">
        <div class="pe-3">
            <i class="fi fi-sr-chart-simple text-gray-300"></i>
        </div>
        <div class="flex-auto">
            <h1 class="text-sm text-gray-300">Premium package </h1>
            <h2 class="text-[10px] text-gray-500">Minimum: $1,000.00</h2>
            <h2 class="text-[10px] text-gray-500">Maximum: $9,999.00</h2>
            <h2 class="text-[10px] text-gray-500">Duration: 30 days</h2>
            <h1 class="text-[10px] text-gray-500">Profit: 10 % daily</h1>
        </div>
        <div class="mt-1">
            <i class="fi fi-sr-angle-small-right text-gray-500"></i>
        </div>
    </a>

</div>
@include('dashboard.footer')