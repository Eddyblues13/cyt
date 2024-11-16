@include('dashboard.header')

<div class="bg-binance sticky top-[60px] z-50 flex justify-center p-1 -mt-2 ">
    <a class="text-[13px] px-2 pb-1 text-gray-400 cursor-pointer text-gray-400" href="/orders/investment">
        Investment
    </a>
    <a class="text-[13px] px-2 pb-1 text-gray-400 cursor-pointer text-gray-400" href="/orders/runing">
        Runing
    </a>
    <a class="text-[13px] px-2 pb-1 text-gray-400 cursor-pointer text-gray-400" href="/orders/complete">
        Completed
    </a>
    <a class="text-[13px] px-2 pb-1 text-gray-400 cursor-pointer text-white border-b-2 border-yellow-400"
        href="/orders">
        All
        Orders
    </a>
</div>



<div class="container mx-auto px-[8px]">
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-[10px] text-gray-400">
                <tr>
                    <th scope="col" class="px-2 pt-3 pb-0">Coin &amp; Buy Price</th>
                    <th scope="col" class="px-2 pt-3 pb-0 text-end">Amount &amp; Type</th>
                    <th scope="col" class="px-2 pt-3 pb-0 text-center">Trade Result</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>



<!-- <div class="fixed bottom-[60px] max-w-[480px] container mx-auto px-[8px] flex justify-center items-center my-3">
    <div class="join opacity-50"><button class="join-item btn !min-h-[2rem] h-[2rem]">«</button><button class="join-item btn !min-h-[2rem] h-[2rem]">Page 1</button><button class="join-item btn !min-h-[2rem] h-[2rem]">»</button></div>
</div> -->

<script>
    $(document).ready(function() {
        function countdown(element, endTime) {
            var interval = setInterval(function() {
                var currentTime = Math.floor(Date.now() / 1000);
                var remainingSeconds = endTime - currentTime;

                if (remainingSeconds <= 0) {
                    clearInterval(interval);
                    var timerId = $(element).data('timer-id');
                    $(element).hide();
                    $('#RuningBtn' + timerId).hide();
                    $('#completeBtn' + timerId).show();
                    // $('#status' + timerId).text('Completed').removeClass('text-yellow-500').addClass('text-emerald-500');
                    return;
                }

                var hours = Math.floor(remainingSeconds / 3600);
                var minutes = Math.floor((remainingSeconds % 3600) / 60);
                var seconds = remainingSeconds % 60;

                var formattedTime =
                    ('0' + hours).slice(-2) + ':' +
                    ('0' + minutes).slice(-2) + ':' +
                    ('0' + seconds).slice(-2);

                $(element).text(formattedTime);
            }, 1000);
        }

        $('.timer').each(function() {
            var endTime = parseInt($(this).data('end-time'));
            countdown(this, endTime);
        });
    });
    $(document).ready(function() {
        var ajaxCalled = false; // Flag to track AJAX request status
        function updateTimers() {
            $('.timer2').each(function() {
                var endTime = $(this).data('end-time');
                var createdAt = $(this).data('created-at');
                var timerId = $(this).data('timer-id');

                var endTimeDate = new Date(endTime).getTime();
                var createdAtDate = new Date(createdAt).getTime();
                var currentTime = new Date().getTime();
                var timeLeft = endTimeDate - currentTime;
                if (timeLeft <= 0) {
                    if (!ajaxCalled) {
                        ajaxCalled = true;
                        $.ajax({
                            url: '/distribute-profits',
                            method: 'POST',
                            data: {
                                _token: 'uP4IujMCBe62V8JZUzmYrv9j6lQdk53y34SHo8I9' // Include CSRF token
                            },
                            success: function(response) {
                                console.log('Profits distributed successfully:', response);
                                setTimeout(function() {
                                    window.location.reload();
                                }, 1000);
                            },
                            error: function(error) {
                                console.error('Error distributing profits:', error);
                            }
                        });
                    }
                } else {
                    var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

                    hours = hours < 10 ? '0' + hours : hours;
                    minutes = minutes < 10 ? '0' + minutes : minutes;
                    seconds = seconds < 10 ? '0' + seconds : seconds;

                    $(this).text(hours + ":" + minutes + ":" + seconds);
                }
            });
        }

        // Initial update
        updateTimers();

        // Update timers every second
        setInterval(updateTimers, 1000);
    });

    function collectReward(tradeId) {
        // Send data to the database

        $('#collectBtn' + tradeId).prop('disabled', true);
        $('#collectText' + tradeId).html('Loading...')

        $.ajax({
            url: '/trading/update', // Your Laravel route
            method: 'POST',
            data: {
                _token: 'uP4IujMCBe62V8JZUzmYrv9j6lQdk53y34SHo8I9', // CSRF token for security
                tradeId: tradeId, // Timer ID or other relevant data
                status: 'completed' // Example data to be sent
            },
            success: function(response) {

                if (response.success) {
                    $('#successContent').text(response.message);
                    $('#success').show();
                    setTimeout(function() {
                        $('#success').hide();
                        window.location.reload();
                    }, 2000);
                }

            },
            error: function(xhr, status, error) {
                $('#errorContent').text('Something went wron. please try again');
                $('#error').show();
                setTimeout(function() {
                    $('#success').hide();
                    window.location.reload();
                }, 2000);
            }
        });


    }
</script>
@include('dashboard.footer')