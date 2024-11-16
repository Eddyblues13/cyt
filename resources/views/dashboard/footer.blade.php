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
<script src="/auth/js/core.js"></script>
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