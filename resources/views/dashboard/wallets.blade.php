@include('dashboard.header')

<div class="container mx-auto px-[12px] border-b border-gray-700 pb-3">
    <div class="flex items-center">
        <div class="text-start flex-auto">
            <h1 class="text-[12px] text-gray-300">Total Balance</h1>
            <h1 class="text-[24px] font-bold text-gray-100">0.00 <span class="text-[12px]">USDT</span></h1>
            <h1 class="text-[10px] text-gray-400 flex items-center">≈ 0.00$</h1>
        </div>
    </div>
    <div class="flex gap-2 mt-2">
        <a class="w-full py-3 font-semibold text-center rounded-lg shadow-lg my-2 bg-yellow-400 !text-gray-800 text-[12px] px-4 !py-[7px] shadow-sm shadow-gray-800"
            href="/deposit">
            Deposit
        </a>
        <a class="w-full py-3 font-semibold text-center rounded-lg shadow-lg my-2 bg-gray-700 !text-gray-200 text-[12px] px-4 !py-[7px] shadow-sm shadow-gray-800"
            href="/withdraw">
            Withdraw
        </a>
        <a class="w-full py-3 font-semibold text-center rounded-lg shadow-lg my-2 bg-gray-700 !text-gray-200 text-[12px] px-4 !py-[7px] shadow-sm shadow-gray-800"
            href="">
            Transfer
        </a>
    </div>
    <div class="grid grid-cols-4 gap-4 mt-3 mb-2">
        <a class="px-2 flex flex-col items-center justify-center comingSoon" href="">
            <div class="border border-gray-600 p-2 w-[40px] h-[40px] rounded-[13px]">
                <img src="auth/images/download.png">
            </div>
            <h1 class="text-center text-white text-[10px] mt-[4px]">Bot Trade</h1>
        </a>
        <a class="px-2 flex flex-col items-center justify-center " href="/markets">
            <div class="border border-gray-600 p-2 w-[40px] h-[40px] rounded-[13px]"><img
                    src="data:image/png;base64,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">
            </div>
            <h1 class="text-center text-white text-[10px] mt-[4px]">Market</h1>
        </a>
        <a class="px-2 flex flex-col items-center justify-center " href="/orders">
            <div class="border border-gray-600 p-2 w-[40px] h-[40px] rounded-[13px]"><img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAABwElEQVR4nO3bQUrDQBSH8ZyhJKu6VC9X8iArl7r0KqX0HkIGm3cKNxaqUDBvU8lWaBdi8p+a7wezLeZ9k0kKtigAAAAAAACAiURbPUSqTudWn8rn3362uz+5++nc6rru8W+v5krFCBEYvjCCs/N1EZzh6yI4w9dFcIavi+AMXxfBGb42wtuu5j0/xwgdX7J0ETqGr4vQzWH4x5fFTaRy06fq89JA5rD6YQZtuf16Le8mG36fqr36wiOzNczkuFssRw8w7Hz1xUauq63Wowfg2Kku3QWH0QPId1nKexEgEUC+C4M7QD+I4AjSDyMEi2dAIoB8FwZ3gH4QwRGkH0YIFs+ARAD5LgzuAP0g4r8eQT+Z2WnK5Rf+13NYU/89kw+cAEYA5w7gCDKOIOcZwEPYeAg7b0G8hkrxPUCMAGIEECOAGAHECCBGADECiBFAjABiBBAjgBgBxAggRgAxAogRQIwAYgQQI4AYAcQIIEYAMQKIEUCMAGIEECOAGAHECCBGADECiJnZx4x/J3zIIcB2xgE26vkXq9Xq3sze5xagrut90zS3RQ6aplma2XqK48j1AYZr3GQzfAAAAAAAABTX4huNr84RdVphWgAAAABJRU5ErkJggg==">
            </div>
            <h1 class="text-center text-white text-[10px] mt-[4px]">Order</h1>
        </a>
        <a class="px-2 flex flex-col items-center justify-center " href="/trading">
            <div class="border border-gray-600 p-2 w-[40px] h-[40px] rounded-[13px]"><img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAEsElEQVR4nO2ca2gcVRiGj0HbiqSoKKJYKihSQbSiRaQU/CmCVQv+EMEoaHS7874nu5toqIW14KX+0CpI/gi2FCFSq8RGG2sWBaGBotJSVArGC/UCUkU0ZxUvzciBPRKTjZndnc2Zy/fA93Nh5nn3nJn5zsxRShAEQRAEQRAEQRCEZaRSqZyjtV6vtb6L5DaSu0lOkjxC8iOS0yS/BHAKwAkAUwDGAewh+SzJh7XWNw0NDfVKcG0QBMEWku+RnCUZdlD299MA9pMcJrmhWq32SCjRg7iW5CsA/uowiH8LwE8k9wK4DcBKCSMCWuvL7PQC4HRcQTTC+JnkiySvaSWIMFRn5DI4klfbuT7OEObUByRvXeoYTE09UK+pifB9tUrlFa31zQA+60YQAD4GcMti8k1Nna7XVFifVIdyHUK1Wl0RBMF2kr93aURMaK2vairfVd5DsAC4HMA7XQrhT5I7Tx1cWVggX0L4L1rrB0nWuxFEpVQIj4+uWSh/bghT6myVd4IgWAfgaDdC0Jrhvhc2SQhL0dfXt6pxa9npQ1zT2rVji4QQBa31ZpI/diOEJx+7J5yp9ch0tBTlcnlNo3cUewiPD98nIbQwJe3uRghPb7/7/6ajg7l9Ym4GyUfibmXYGnlq8wL5ZlLN1ifV1qYHkmdI3gngt7hDeGvkBpEfFa31jSR/iPsW9cRrF8k/PyrFYvFKkl/HGcKjlf5w5lBPMfJB5J3jo2uHywNBrFMRAAkgCq6x9tXY+WG5tDXOEGYAXBrpIPKKmdfVPDm2OhyMN4S9vs8xsZhmLeWaCr8b7w2HyrGFYFsgG3yfa2rk1xv1/XhvOFguxHUteNv3+aZKfr1R3x7oDQdLsYQwC+A63+edKvn1Rn3z5uqwPND5dATgVZV3TIvyXU2/fkFY6vAW1b5KUywWL1F5xbQp39Wx0bWhJjodCdtUHjEdynd1eM+6UHcWwLTKGyYm+a6ruf/5jS8B+KODEK5XecHELN+1lLXW93awxLlT5QHTJfkOkkGbAXyqso7psnwHyV3thGCXRlVWMcsk31KtVs8E8G4bIdyvsohZRvmOQqFwHoDPWwxgRGUN40G+w74zSvKXFh7KplSWMB7lOwDcHnWRH4DJzJc5JgHyHSR3RB0FdhlUpR2TIPkW+68mORYlAPvBoUozJmHy512UT2a6L2QSKt8RBMEmkn8vcR14TqURk3D5DgDPZG6t2KREvqW/v/+sxofkiwUwodKESZF8R6lUusK+mrJIAB+qtGBSKN9BspTqtQGTYvmuX0TyWJOL8Bcq6aRdviMIgo1N1g+SPQKyIt8B4OV5I+ATlVSyJt8C4EIAv84J4bBKIlmU7yD5RKLflsuyfIvW+tzGjizJWxPIuvz5owBAWSWFvMi3DAwMXGz3nLAbRKkkkCf5DgBvzN15xRt5lG/RWt/hfXu0vMpv4PeD7ZzL94vI94jI94jI94jI94jI94jI94jI94jI94jI94jI94jdkM5uTBdbe6GmHvJ5Pqkk3KdW1GtqXHo7KQ1BGmseQxD5HkMQ+R5DEPkeQxD5HkMQ+R5DEPkeQzCT6oCs4XpEtnAXBEEQBEEQBEEQVNL5B9/3oJrX4eI1AAAAAElFTkSuQmCC">
            </div>
            <h1 class="text-center text-white text-[10px] mt-[4px]">Trade</h1>
        </a>
    </div>
</div>

<div class="container mx-auto px-[12px] pb-3 mt-2">
    <h1 class="text-sm font-bold">Balances</h1>
    <div>
        <div class="flex mt-2 gap-2 border-b border-gray-700 py-2"><img class="w-[20px] h-[20px] rounded-[50%]"
                src="auth/images/coins/1711137174306-Bitcoin.svg.png" alt="">
            <div class="flex-auto">
                <h1 class="text-sm font-medium">BTC</h1>
                <h1 class="text-[10px] text-gray-400">Bitcoin</h1>
            </div>
            <div>
                <h1 class="text-xs font-medium text-gray-300">0.000000</h1>
                <h1 class="text-[10px] text-end font-medium text-gray-300">≈ 0.000$</h1>
            </div>
        </div>
        <div class="flex mt-2 gap-2 border-b border-gray-700 py-2"><img class="w-[20px] h-[20px] rounded-[50%]"
                src="auth/images/coins/1711137435289-63f5ae36e64321677045302.png" alt="">
            <div class="flex-auto">
                <h1 class="text-sm font-medium">ETH</h1>
                <h1 class="text-[10px] text-gray-400">Ethereum</h1>
            </div>
            <div>
                <h1 class="text-xs font-medium text-gray-300">0.000000</h1>
                <h1 class="text-[10px] text-end font-medium text-gray-300">≈ 0.000$</h1>
            </div>
        </div>
        <div class="flex mt-2 gap-2 border-b border-gray-700 py-2"><img class="w-[20px] h-[20px] rounded-[50%]"
                src="auth/images/coins/1711137454561-63f5aefe3d51d1677045502.png" alt="">
            <div class="flex-auto">
                <h1 class="text-sm font-medium">BNB</h1>
                <h1 class="text-[10px] text-gray-400">BNB</h1>
            </div>
            <div>
                <h1 class="text-xs font-medium text-gray-300">0.000000</h1>
                <h1 class="text-[10px] text-end font-medium text-gray-300">≈ 0.000$</h1>
            </div>
        </div>
        <div class="flex mt-2 gap-2 border-b border-gray-700 py-2"><img class="w-[20px] h-[20px] rounded-[50%]"
                src="auth/images/coins/1711137080552-63f5b15b321561677046107.png" alt="">
            <div class="flex-auto">
                <h1 class="text-sm font-medium">SOL</h1>
                <h1 class="text-[10px] text-gray-400">Solona</h1>
            </div>
            <div>
                <h1 class="text-xs font-medium text-gray-300">0.000000</h1>
                <h1 class="text-[10px] text-end font-medium text-gray-300">≈ 0.000$</h1>
            </div>
        </div>
        <div class="flex mt-2 gap-2 border-b border-gray-700 py-2"><img class="w-[20px] h-[20px] rounded-[50%]"
                src="auth/images/coins/1711137626248-63f5b06b27ce61677045867.png" alt="">
            <div class="flex-auto">
                <h1 class="text-sm font-medium">XRP</h1>
                <h1 class="text-[10px] text-gray-400">XRP</h1>
            </div>
            <div>
                <h1 class="text-xs font-medium text-gray-300">0.000000</h1>
                <h1 class="text-[10px] text-end font-medium text-gray-300">≈ 0.000$</h1>
            </div>
        </div>
        <div class="flex mt-2 gap-2 border-b border-gray-700 py-2"><img class="w-[20px] h-[20px] rounded-[50%]"
                src="auth/images/coins/1711137870591-63f5b131cee801677046065.jpg" alt="">
            <div class="flex-auto">
                <h1 class="text-sm font-medium">DOGE</h1>
                <h1 class="text-[10px] text-gray-400">Dogecoin</h1>
            </div>
            <div>
                <h1 class="text-xs font-medium text-gray-300">0.000000</h1>
                <h1 class="text-[10px] text-end font-medium text-gray-300">≈ 0.000$</h1>
            </div>
        </div>
        <div class="flex mt-2 gap-2 border-b border-gray-700 py-2"><img class="w-[20px] h-[20px] rounded-[50%]"
                src="auth/images/coins/1711137740064-63f5b09e9f94e1677045918.png" alt="">
            <div class="flex-auto">
                <h1 class="text-sm font-medium">ADA</h1>
                <h1 class="text-[10px] text-gray-400">Cardano</h1>
            </div>
            <div>
                <h1 class="text-xs font-medium text-gray-300">0.000000</h1>
                <h1 class="text-[10px] text-end font-medium text-gray-300">≈ 0.000$</h1>
            </div>
        </div>
        <div class="flex mt-2 gap-2 border-b border-gray-700 py-2"><img class="w-[20px] h-[20px] rounded-[50%]"
                src="auth/images/coins/1711139227465-5805.png" alt="">
            <div class="flex-auto">
                <h1 class="text-sm font-medium">YSCH</h1>
                <h1 class="text-[10px] text-gray-400">YashCoin</h1>
            </div>
            <div>
                <h1 class="text-xs font-medium text-gray-300">0.000000</h1>
                <h1 class="text-[10px] text-end font-medium text-gray-300">≈ 0.000$</h1>
            </div>
        </div>
        <div class="flex mt-2 gap-2 border-b border-gray-700 py-2"><img class="w-[20px] h-[20px] rounded-[50%]"
                src="auth/images/coins/1711138140032-65b276149bdac1706194452.png" alt="">
            <div class="flex-auto">
                <h1 class="text-sm font-medium">LINK</h1>
                <h1 class="text-[10px] text-gray-400">Chainlink</h1>
            </div>
            <div>
                <h1 class="text-xs font-medium text-gray-300">0.000000</h1>
                <h1 class="text-[10px] text-end font-medium text-gray-300">≈ 0.000$</h1>
            </div>
        </div>
        <div class="flex mt-2 gap-2 border-b border-gray-700 py-2"><img class="w-[20px] h-[20px] rounded-[50%]"
                src="auth/images/coins/1711137127040-63f5b1ee31d5b1677046254.png" alt="">
            <div class="flex-auto">
                <h1 class="text-sm font-medium">TRX</h1>
                <h1 class="text-[10px] text-gray-400">TRX</h1>
            </div>
            <div>
                <h1 class="text-xs font-medium text-gray-300">0.000000</h1>
                <h1 class="text-[10px] text-end font-medium text-gray-300">≈ 0.000$</h1>
            </div>
        </div>
        <div class="flex mt-2 gap-2 border-b border-gray-700 py-2"><img class="w-[20px] h-[20px] rounded-[50%]"
                src="auth/images/coins/1711139389480-1831.png" alt="">
            <div class="flex-auto">
                <h1 class="text-sm font-medium">BCH</h1>
                <h1 class="text-[10px] text-gray-400">Bitcoin Cash</h1>
            </div>
            <div>
                <h1 class="text-xs font-medium text-gray-300">0.000000</h1>
                <h1 class="text-[10px] text-end font-medium text-gray-300">≈ 0.000$</h1>
            </div>
        </div>
        <div class="flex mt-2 gap-2 border-b border-gray-700 py-2"><img class="w-[20px] h-[20px] rounded-[50%]"
                src="auth/images/coins/1711139510495-6535.png" alt="">
            <div class="flex-auto">
                <h1 class="text-sm font-medium">NEAR</h1>
                <h1 class="text-[10px] text-gray-400">NEAR</h1>
            </div>
            <div>
                <h1 class="text-xs font-medium text-gray-300">0.000000</h1>
                <h1 class="text-[10px] text-end font-medium text-gray-300">≈ 0.000$</h1>
            </div>
        </div>
        <div class="flex mt-2 gap-2 border-b border-gray-700 py-2"><img class="w-[20px] h-[20px] rounded-[50%]"
                src="auth/images/coins/1711138170595-64b0737bcd6471689285499.jpg" alt="">
            <div class="flex-auto">
                <h1 class="text-sm font-medium">LTC</h1>
                <h1 class="text-[10px] text-gray-400">LITECOIN</h1>
            </div>
            <div>
                <h1 class="text-xs font-medium text-gray-300">0.000000</h1>
                <h1 class="text-[10px] text-end font-medium text-gray-300">≈ 0.000$</h1>
            </div>
        </div>
        <div class="flex mt-2 gap-2 border-b border-gray-700 py-2"><img class="w-[20px] h-[20px] rounded-[50%]"
                src="auth/images/coins/1711139481440-8916.png" alt="">
            <div class="flex-auto">
                <h1 class="text-sm font-medium">ICP</h1>
                <h1 class="text-[10px] text-gray-400">ICP</h1>
            </div>
            <div>
                <h1 class="text-xs font-medium text-gray-300">0.000000</h1>
                <h1 class="text-[10px] text-end font-medium text-gray-300">≈ 0.000$</h1>
            </div>
        </div>
        <div class="flex mt-2 gap-2 border-b border-gray-700 py-2"><img class="w-[20px] h-[20px] rounded-[50%]"
                src="auth/images/coins/1711138580329-21794.png" alt="">
            <div class="flex-auto">
                <h1 class="text-sm font-medium">APT</h1>
                <h1 class="text-[10px] text-gray-400">Aptos</h1>
            </div>
            <div>
                <h1 class="text-xs font-medium text-gray-300">0.000000</h1>
                <h1 class="text-[10px] text-end font-medium text-gray-300">≈ 0.000$</h1>
            </div>
        </div>
        <div class="flex mt-2 gap-2 border-b border-gray-700 py-2"><img class="w-[20px] h-[20px] rounded-[50%]"
                src="auth/images/coins/1711138693569-3794.png" alt="">
            <div class="flex-auto">
                <h1 class="text-sm font-medium">ATOM</h1>
                <h1 class="text-[10px] text-gray-400">Cosmos</h1>
            </div>
            <div>
                <h1 class="text-xs font-medium text-gray-300">0.000000</h1>
                <h1 class="text-[10px] text-end font-medium text-gray-300">≈ 0.000$</h1>
            </div>
        </div>
        <div class="flex mt-2 gap-2 border-b border-gray-700 py-2"><img class="w-[20px] h-[20px] rounded-[50%]"
                src="auth/images/coins/1711139634049-11841.png" alt="">
            <div class="flex-auto">
                <h1 class="text-sm font-medium">ARB</h1>
                <h1 class="text-[10px] text-gray-400">Arbitrum</h1>
            </div>
            <div>
                <h1 class="text-xs font-medium text-gray-300">0.000000</h1>
                <h1 class="text-[10px] text-end font-medium text-gray-300">≈ 0.000$</h1>
            </div>
        </div>
        <div class="flex mt-2 gap-2 border-b border-gray-700 py-2"><img class="w-[20px] h-[20px] rounded-[50%]"
                src="auth/images/coins/1711139575059-4847.png" alt="">
            <div class="flex-auto">
                <h1 class="text-sm font-medium">STX</h1>
                <h1 class="text-[10px] text-gray-400">Stacks</h1>
            </div>
            <div>
                <h1 class="text-xs font-medium text-gray-300">0.000000</h1>
                <h1 class="text-[10px] text-end font-medium text-gray-300">≈ 0.000$</h1>
            </div>
        </div>
        <div class="flex mt-2 gap-2 border-b border-gray-700 py-2"><img class="w-[20px] h-[20px] rounded-[50%]"
                src="auth/images/coins/1711139789384-328.png" alt="">
            <div class="flex-auto">
                <h1 class="text-sm font-medium">XMR</h1>
                <h1 class="text-[10px] text-gray-400">Moniro</h1>
            </div>
            <div>
                <h1 class="text-xs font-medium text-gray-300">0.000000</h1>
                <h1 class="text-[10px] text-end font-medium text-gray-300">≈ 0.000$</h1>
            </div>
        </div>
        <div class="flex mt-2 gap-2 border-b border-gray-700 py-2"><img class="w-[20px] h-[20px] rounded-[50%]"
                src="auth/images/coins/1711138271497-65b274eeea94b1706194158.png" alt="">
            <div class="flex-auto">
                <h1 class="text-sm font-medium">ALGO</h1>
                <h1 class="text-[10px] text-gray-400">Algo</h1>
            </div>
            <div>
                <h1 class="text-xs font-medium text-gray-300">0.000000</h1>
                <h1 class="text-[10px] text-end font-medium text-gray-300">≈ 0.000$</h1>
            </div>
        </div>
        <div class="flex mt-2 gap-2 border-b border-gray-700 py-2"><img class="w-[20px] h-[20px] rounded-[50%]"
                src="auth/images/coins/1711139761164-7278.png" alt="">
            <div class="flex-auto">
                <h1 class="text-sm font-medium">AAVE</h1>
                <h1 class="text-[10px] text-gray-400">AAVE</h1>
            </div>
            <div>
                <h1 class="text-xs font-medium text-gray-300">0.000000</h1>
                <h1 class="text-[10px] text-end font-medium text-gray-300">≈ 0.000$</h1>
            </div>
        </div>
        <div class="flex mt-2 gap-2 border-b border-gray-700 py-2"><img class="w-[20px] h-[20px] rounded-[50%]"
                src="auth/images/coins/1711138741502-7080.png" alt="">
            <div class="flex-auto">
                <h1 class="text-sm font-medium">GALA</h1>
                <h1 class="text-[10px] text-gray-400">Gala</h1>
            </div>
            <div>
                <h1 class="text-xs font-medium text-gray-300">0.000000</h1>
                <h1 class="text-[10px] text-end font-medium text-gray-300">≈ 0.000$</h1>
            </div>
        </div>
        <div class="flex mt-2 gap-2 border-b border-gray-700 py-2"><img class="w-[20px] h-[20px] rounded-[50%]"
                src="auth/images/coins/1711138891908-18069.png" alt="">
            <div class="flex-auto">
                <h1 class="text-sm font-medium">GMT</h1>
                <h1 class="text-[10px] text-gray-400">GMT</h1>
            </div>
            <div>
                <h1 class="text-xs font-medium text-gray-300">0.000000</h1>
                <h1 class="text-[10px] text-end font-medium text-gray-300">≈ 0.000$</h1>
            </div>
        </div>
    </div>
</div>


<div class="btm-nav bottomnav-user bg-binance z-[5] max-w-[480px] mx-auto"><a class="text-gray-400 bg-binance"
        href="/"><i class="fi fi-sr-home leading-[0px] mb-[3px] text-[18px]"></i><span
            class="btm-nav-label text-[9px]">Home</span></a><a class="text-gray-400 bg-binance" href="/markets"><i
            class="fi fi-sr-chart-simple leading-[0px] mb-[3px] text-[18px]"></i><span
            class="btm-nav-label text-[9px]">Markets</span></a><a class="text-gray-400 bg-binance" href="/trading"><i
            class="fi fi-sr-coins leading-[0px] mb-[3px] text-[18px]"></i><span
            class="btm-nav-label text-[9px]">Trade</span></a><a class="text-gray-400 bg-binance" href="/orders"><i
            class="fi fi-sr-ballot leading-[0px] mb-[3px] text-[18px]"></i><span
            class="btm-nav-label text-[9px]">Orders</span></a><a aria-current="page" class="text-white"
        href="/wallets"><i class="fi fi-sr-wallet leading-[0px] mb-[3px] text-[18px]"></i><span
            class="btm-nav-label text-[9px]">Wallet</span></a></div>
</div>
<div style="position: fixed; z-index: 9999; inset: 16px; pointer-events: none;"></div>
</div>
@include('dashboard.footer')