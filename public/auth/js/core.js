$(document).ready(function() {

    $('.comingSoon').on('click', function(e) {
        e.preventDefault();
        $('#successContent').text('Coming soon.');
        $('#success').show();
        setTimeout(function() {
            $('#success').hide();
        }, 3000);
    });


    // Event listener for the up button click
    $('#upBtn').click(function() {



        $('#up').text('Loading...');
        $('#upBtn').removeClass('bg-emerald-500 hover:bg-emerald-600').addClass('bg-green-500 hover:bg-green-600');
        $('#upBtn, #downBtn').prop('disabled', true);

        var formData = {
            amount: $('#amountInput').val(),
            coin: $('#coin').val(),
            selectedTime: $('#select-time').val(),
            type: 'up'
        };

        // Send AJAX request
        $.ajax({
            type: 'POST',
            url: '/trading/sell-buy',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                // Handle success response
                console.log(response); // Log response to console (for testing)

                if (response.success) {
                    // Example: Redirect to a success page
                    $('#successContent').text(response.message);
                    $('#success').show();
                    $('#openTrade').text('$' + response.price + ' ' + response.coin);
                    $('#tradeDiv').show();
                    setTimeout(function() {
                        $('#success').hide();
                        window.location.href = '/orders';
                    }, 2000);
                } else {
                    $('#errorContent').text(response.message);
                    $('#error').show();

                    setTimeout(function() {
                        $('#error').hide();
                    }, 1000);

                    $('#up').text('Up');
                    $('#upBtn').addClass('bg-emerald-500 hover:bg-emerald-600').removeClass('bg-green-500 hover:bg-green-600');
                    $('#upBtn, #downBtn').prop('disabled', false);
                }
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error(xhr.responseText);

                $('#errorContent').text('Something went wron. please try again');
                $('#error').show();
                $('#regBtn').html('Sign Up').prop('disabled', false);
                setTimeout(function() {
                    $('#error').hide();
                }, 1000);

                $('#up').text('Up');
                $('#upBtn').addClass('bg-emerald-500 hover:bg-emerald-600').removeClass('bg-green-500 hover:bg-green-600');
                $('#upBtn, #downBtn').prop('disabled', false);
            }
        });


    });


    // Event listener for the down button click
    $('#downBtn').click(function() {

        $('#down').text('Loading...');
        $('#downBtn').removeClass('bg-emerald-500 hover:bg-emerald-600').addClass('bg-green-500 hover:bg-green-600');
        $('#downBtn, #upBtn').prop('disabled', true);

        var formData = {
            amount: $('#amountInput').val(),
            coin: $('#coin').val(),
            selectedTime: $('#select-time').val(),
            type: 'down'
        };

        // Send AJAX request
        $.ajax({
            type: 'POST',
            url: '/trading/sell-buy',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                // Handle success response
                console.log(response); // Log response to console (for testing)

                if (response.success) {
                    // Example: Redirect to a success page
                    $('#successContent').text(response.message);
                    $('#success').show();
                    $('#openTrade').text('$' + response.price + ' ' + response.coin);
                    $('#tradeDiv').show();
                    setTimeout(function() {
                        $('#success').hide();
                        window.location.href = '/orders';
                    }, 2000);
                } else {
                    $('#errorContent').text(response.message);
                    $('#error').show();

                    setTimeout(function() {
                        $('#error').hide();
                    }, 1000);

                    $('#down').text('Down');
                    $('#downBtn').addClass('bg-emerald-500 hover:bg-emerald-600').removeClass('bg-green-500 hover:bg-green-600');
                    $('#upBtn, #downBtn').prop('disabled', false);
                }
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error(xhr.responseText);

                $('#errorContent').text('Something went wron. please try again');
                $('#error').show();
                $('#regBtn').html('Sign Up').prop('disabled', false);
                setTimeout(function() {
                    $('#error').hide();
                }, 1000);

                $('#down').text('Down');
                $('#downBtn').addClass('bg-emerald-500 hover:bg-emerald-600').removeClass('bg-green-500 hover:bg-green-600');
                $('#upBtn, #downBtn').prop('disabled', false);
            }
        });


    });


    $('#wamount').on('change', function() {
        var amount = $('#wamount').val();
        var minAmount = $('#minAmount').html();

        if (amount < minAmount) {
            $('#errorContent').text('Amount must be not be less than ' + minAmount);
            $('#error').show();
            setTimeout(function() {
                $('#error').hide();
            }, 3000);
        } else {
            var processFee = $('#processFee').html();
            var receive = amount - ((processFee / 100) * amount);
            $('#amtToRec').html(receive);
        }

    });


    $('#withdrawBtn').on('click', function(e) {
        e.preventDefault();
        var amtToRec = $('#amtToRec').html();
        var walletAddress = $('#walletAddress').val();
        var password = $('#password').val();
        var amount = $('#wamount').val();
        var minAmount = $('#minAmount').html();

        var formData = {
            walletAddress: walletAddress,
            password: password,
            amount: amount,
            minAmount: minAmount,
            processFee: amtToRec,
            network: 'TRC20',
            type: 'USDT'
        };

        // Send AJAX request
        $.ajax({
            type: 'POST',
            url: '/withdraw/process',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                // Handle success response
                console.log(response); // Log response to console (for testing)

                if (response.success) {
                    // Example: Redirect to a success page
                    $('#successContent').text(response.message);
                    $('#success').show();
                    $('#openTrade').text('$' + response.price + ' ' + response.coin);
                    $('#tradeDiv').show();
                    setTimeout(function() {
                        $('#success').hide();
                        window.location.href = '/withdraw/p=' + response.uuid;
                    }, 2000);
                } else {
                    $('#errorContent').text(response.message);
                    $('#error').show();

                    setTimeout(function() {
                        $('#error').hide();
                    }, 1000);

                    $('#up').text('Up');
                    $('#upBtn').addClass('bg-emerald-500 hover:bg-emerald-600').removeClass('bg-green-500 hover:bg-green-600');
                    $('#upBtn, #downBtn').prop('disabled', false);
                }
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error(xhr.responseText);

                $('#errorContent').text('Something went wron. please try again');
                $('#error').show();
                $('#regBtn').html('Sign Up').prop('disabled', false);
                setTimeout(function() {
                    $('#error').hide();
                }, 1000);

                $('#up').text('Up');
                $('#upBtn').addClass('bg-emerald-500 hover:bg-emerald-600').removeClass('bg-green-500 hover:bg-green-600');
                $('#upBtn, #downBtn').prop('disabled', false);
            }
        });

    });



    $('#withdrawBtnBank').on('click', function(e) {
        e.preventDefault();
        var amtToRec = $('#amtToRec').html();
        var bankName = $('#bankName').val();
        var acctHolder = $('#acctHolder').val();
        var acctNumber = $('#acctNumber').val();
        var password = $('#password').val();
        var amount = $('#wamount').val();
        var minAmount = $('#minAmount').html();

        var formData = {
            bankName: bankName,
            acctHolder: acctHolder,
            acctNumber: acctNumber,
            password: password,
            amount: amount,
            minAmount: minAmount,
            processFee: amtToRec,
            network: 'Wire transfer',
            type: 'USD'
        };

        // Send AJAX request
        $.ajax({
            type: 'POST',
            url: '/withdraw/process/bank',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                // Handle success response
                console.log(response); // Log response to console (for testing)

                if (response.success) {
                    // Example: Redirect to a success page
                    $('#successContent').text(response.message);
                    $('#success').show();
                    $('#openTrade').text('$' + response.price + ' ' + response.coin);
                    $('#tradeDiv').show();
                    setTimeout(function() {
                        $('#success').hide();
                        window.location.href = '/withdraw/p=' + response.uuid;
                    }, 2000);
                } else {
                    $('#errorContent').text(response.message);
                    $('#error').show();

                    setTimeout(function() {
                        $('#error').hide();
                    }, 1000);

                    $('#up').text('Up');
                    $('#upBtn').addClass('bg-emerald-500 hover:bg-emerald-600').removeClass('bg-green-500 hover:bg-green-600');
                    $('#upBtn, #downBtn').prop('disabled', false);
                }
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error(xhr.responseText);

                $('#errorContent').text('Something went wron. please try again');
                $('#error').show();
                $('#regBtn').html('Sign Up').prop('disabled', false);
                setTimeout(function() {
                    $('#error').hide();
                }, 1000);

                $('#up').text('Up');
                $('#upBtn').addClass('bg-emerald-500 hover:bg-emerald-600').removeClass('bg-green-500 hover:bg-green-600');
                $('#upBtn, #downBtn').prop('disabled', false);
            }
        });

    });

    $('.fi-sr-copy-alt').click(function() {
        // Get the text content of the sibling h1 element
        var textToCopy = $(this).siblings('.flex-auto').find('.wallet-address').text();

        // Create a temporary input element to hold the text
        var tempInput = $('<input>');
        $('body').append(tempInput);
        tempInput.val(textToCopy).select();

        // Copy the text to the clipboard
        document.execCommand('copy');

        // Remove the temporary input element
        tempInput.remove();

        // Optionally, you can display a message or change the icon color to indicate success
        $(this).addClass('text-yellow-400');
        alert('Copied: ' + textToCopy);
    });

    $('#depositBtn').on('click', function() {
        $('#depositBtn').prop('disabled', true);
        var amount = parseFloat($('#amount').val());
        var transId = $('#transId').val();
        var walletId = $('#walletId').val();
        var min = parseFloat($('#min').html());
        var max = parseFloat($('#max').html());

        if (amount < min) {
            $('#errorContent').text('Check minimum deposit');
            $('#error').show();
            setTimeout(function() {
                $('#error').hide();
            }, 3000);
            $('#depositBtn').prop('disabled', false);

            return;
        }
        if (amount > max) {
            $('#errorContent').text('Check maximum deposit');
            $('#error').show();
            setTimeout(function() {
                $('#error').hide();
            }, 3000);
            $('#depositBtn').prop('disabled', false);

            return;
        }

        var formData = {
            amount: amount,
            transId: transId,
            walletId: walletId,
        };

        $.ajax({
            type: 'POST',
            url: '/deposit/process',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                // Handle success response
                console.log(response); // Log response to console (for testing)

                if (response.success) {
                    // Example: Redirect to a success page
                    $('#successContent').text(response.message);
                    $('#success').show();
                    $('#openTrade').text('$' + response.price + ' ' + response.coin);
                    $('#tradeDiv').show();
                    setTimeout(function() {
                        $('#success').hide();
                        window.location.href = '/deposit/d/' + response.uuid;
                    }, 2000);
                } else {
                    $('#errorContent').text(response.message);
                    $('#error').show();

                    setTimeout(function() {
                        $('#error').hide();
                    }, 1000);
                    //          $('#depositBtn').addClass('bg-emerald-500 hover:bg-emerald-600').removeClass('bg-green-500 hover:bg-green-600');
                    $('#depositBtn').prop('disabled', false);

                }
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error(xhr.responseText);

                $('#errorContent').text('Something went wron. please try again');
                $('#error').show();
                $('#regBtn').html('Sign Up').prop('disabled', false);
                setTimeout(function() {
                    $('#error').hide();
                }, 1000);

                //   $('#depositBtn').addClass('bg-emerald-500 hover:bg-emerald-600').removeClass('bg-green-500 hover:bg-green-600');
                $('#depositBtn').prop('disabled', false);
            }
        });

    })


    let currentValue = 0;

    // Function to update the input field with the current value
    function updateInput() {
        $('#amountInput').val(currentValue.toFixed(2));
    }

    // Event listener for the decrease button click
    $('#decreaseBtn').click(function() {
        if (currentValue > 0) {
            currentValue -= 1;
            updateInput();
        }
    });

    // Event listener for the increase button click
    $('#increaseBtn').click(function() {
        currentValue += 1;
        updateInput();
    });


    // Update the input field on page load
    updateInput();



    $('#InvestAmount').on('change', function() {

        var percentProfit = parseFloat($('#percentProfit').html());
        var amount = parseFloat($('#InvestAmount').val());
        var duration = parseFloat($('#duration').html());

        var receive = ((percentProfit / 100) * amount);
        var totalProfit = (((percentProfit / 100) * amount) + amount) * duration;



        receive = '$' + receive.toLocaleString('en-US', {
            minimumFractionDigits: 2
        });
        totalProfit = '$' + totalProfit.toLocaleString('en-US', {
            minimumFractionDigits: 2
        });

        $('#Dprofit').html(receive);

        $('#tProfit').html(totalProfit);

        $('#roiD').show();
        $('#roiT').show();

    });



    $('#investBtn').on('click', function() {
        $('#investBtn').prop('disabled', true);
        var amount = parseFloat($('#InvestAmount').val());
        var planId = $('#planId').val();
        var min = parseFloat($('#minInvest').html());
        var max = parseFloat($('#maxInvest').html());

        if (amount < min) {
            $('#errorContent').text('Check minimum Investment');
            $('#error').show();
            setTimeout(function() {
                $('#error').hide();
            }, 3000);
            $('#investBtn').prop('disabled', false);

            return;
        }
        if (amount > max) {
            $('#errorContent').text('Check maximum Investment');
            $('#error').show();
            setTimeout(function() {
                $('#error').hide();
            }, 3000);
            $('#investBtn').prop('disabled', false);

            return;
        }

        var formData = {
            amount: amount,
            planId: planId,
        };

        $.ajax({
            type: 'POST',
            url: '/invest/process',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.success) {
                    // Example: Redirect to a success page
                    $('#successContent').text(response.message);
                    $('#success').show();
                    $('#openTrade').text('$' + response.price + ' ' + response.coin);
                    $('#tradeDiv').show();
                    setTimeout(function() {
                        $('#success').hide();
                        window.location.href = '/invest/d/' + response.uuid;
                    }, 2000);
                } else {
                    $('#errorContent').text(response.message);
                    $('#error').show();

                    setTimeout(function() {
                        $('#error').hide();
                    }, 1000);
                    //          $('#investBtn').addClass('bg-emerald-500 hover:bg-emerald-600').removeClass('bg-green-500 hover:bg-green-600');
                    $('#investBtn').prop('disabled', false);

                }
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error(xhr.responseText);

                $('#errorContent').text('Something went wrong. please try again');
                $('#error').show();
                $('#regBtn').html('Sign Up').prop('disabled', false);
                setTimeout(function() {
                    $('#error').hide();
                }, 1000);

                //   $('#investBtn').addClass('bg-emerald-500 hover:bg-emerald-600').removeClass('bg-green-500 hover:bg-green-600');
                $('#investBtn').prop('disabled', false);
            }
        });

    })


});