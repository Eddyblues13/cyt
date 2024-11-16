<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TradeSphereFinex - Sign Up</title>
    <meta name="description"
        content="TradeSphereFinex: Your Premier Trading Application - Empowering traders with efficiency and precision.">
    <meta name="keyword" content="TradeSphereFinex, TradeSphere, trading, hemel, tradinghemel,">
    <meta name="robots" content="index, follow">
    <link rel="icon" type="image/svg+xml" href="auth/logo.png">
    <link rel="stylesheet" href="auth/style.css">
    <link rel="stylesheet" href="auth/notify.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="min-h-screen bg-gray-900 text-white">
    <div class="max-w-md mx-auto pt-10">
        <div class="text-center">
            <img src="auth/logo.png" alt="Your Company" class="w-16 mx-auto">
            <h1 class="text-2xl font-bold mt-4">Sign Up</h1>
            <p class="text-sm text-gray-400 mt-2">Ready to join the party? Fill in the details below!</p>
        </div>
        <form id="registerForm" method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Include CSRF token for security -->

            <!-- Full Name -->
            <label for="fullName" class="block mb-2 text-sm font-medium text-gray-200">Full Name</label>
            <div class="relative mb-3">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <i class="fi fi-sr-id-card-clip-alt text-yellow-400"></i>
                </div>
                <input id="fullName" name="full_name" class="bg-transparent border hover:border-yellow-500 focus:border-yellow-500 focus:outline-0 text-gray-200 focus:text-gray-200 text-sm rounded-md focus:ring-rose-500 block w-full ps-10 p-2.5 
                       @error('full_name') border-red-500 @enderror" type="text" placeholder="Enter your full name"
                    value="{{ old('full_name') }}">
                @error('full_name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Username -->
            <label for="userName" class="block mb-2 text-sm font-medium text-gray-200">Username</label>
            <div class="relative mb-3">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <i class="fi fi-sr-user text-yellow-400"></i>
                </div>
                <input id="userName" name="username" class="bg-transparent border hover:border-yellow-500 focus:border-yellow-500 focus:outline-0 text-gray-200 focus:text-gray-200 text-sm rounded-md focus:ring-rose-500 block w-full ps-10 p-2.5 
                       @error('username') border-red-500 @enderror" type="text" placeholder="Enter your username"
                    value="{{ old('username') }}">
                @error('username')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <label for="email" class="block mb-2 text-sm font-medium text-gray-200">Email Address</label>
            <div class="relative mb-3">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <i class="fi fi-sr-envelope text-yellow-400"></i>
                </div>
                <input id="email" name="email" class="bg-transparent border hover:border-yellow-500 focus:border-yellow-500 focus:outline-0 text-gray-200 focus:text-gray-200 text-sm rounded-md focus:ring-rose-500 block w-full ps-10 p-2.5 
                       @error('email') border-red-500 @enderror" type="text" placeholder="Enter your email address"
                    value="{{ old('email') }}">
                @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <label for="password" class="block mb-2 text-sm font-medium text-gray-200">Password</label>
            <div class="relative mb-3">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <i class="fi fi-sr-lock text-yellow-400"></i>
                </div>
                <input id="password" name="password" class="bg-transparent border hover:border-yellow-500 focus:border-yellow-500 focus:outline-0 text-gray-200 focus:text-gray-200 text-sm rounded-md focus:ring-rose-500 block w-full ps-10 p-2.5 
                       @error('password') border-red-500 @enderror" type="password" placeholder="Enter your password">
                @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-200">Confirm
                Password</label>
            <div class="relative mb-3">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <i class="fi fi-sr-lock-alt text-yellow-400"></i>
                </div>
                <input id="password_confirmation" name="password_confirmation" class="bg-transparent border hover:border-yellow-500 focus:border-yellow-500 focus:outline-0 text-gray-200 focus:text-gray-200 text-sm rounded-md focus:ring-rose-500 block w-full ps-10 p-2.5 
                        @error('password_confirmation') border-red-500 @enderror" type="password"
                    placeholder="Confirm your password">
                @error('password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Referral Code -->
            <label for="refCode" class="block mb-2 text-sm font-medium text-gray-200">Referral Code</label>
            <div class="relative mb-3">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <i class="fi fi-sr-user-add text-yellow-400"></i>
                </div>
                <input id="refCode" name="ref_code" class="bg-transparent border hover:border-yellow-500 focus:border-yellow-500 focus:outline-0 text-gray-200 focus:text-gray-200 text-sm rounded-md focus:ring-rose-500 block w-full ps-10 p-2.5 
                       @error('ref_code') border-red-500 @enderror" type="text"
                    placeholder="Enter referral code (optional)" value="{{ old('ref_code') }}">
                @error('ref_code')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button id="regBtn" type="submit"
                class="bg-gradient-to-r hover:bg-gradient-to-l from-yellow-400 hover:from-yellow-500 to-yellow-400 hover:to-yellow-500 text-white w-[100%] p-2 rounded-[10px] mt-5 py-[12px] font-bold">
                Sign Up
            </button>
        </form>

        <p class="text-center text-sm text-gray-400 mt-5">Already have an account?
            <a href="/login" class="text-yellow-500 hover:underline">Log In</a>
        </p>
    </div>
</body>

</html>