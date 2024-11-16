<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TradeSphereFinex - Log In</title>
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
            <h1 class="text-2xl font-bold mt-4">Log In</h1>
            <p class="text-sm text-gray-400 mt-2">Welcome back! Log in to access your account.</p>
        </div>
        <form id="loginForm" method="POST" action="{{ route('login') }}">
            @csrf
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

            <!-- Remember Me -->
            <div class="flex items-center mb-3">
                <input id="remember" name="remember" type="checkbox"
                    class="w-4 h-4 text-yellow-400 bg-transparent border-gray-600 rounded focus:ring-yellow-500">
                <label for="remember" class="ml-2 text-sm font-medium text-gray-200">Remember me</label>
            </div>

            <button id="loginBtn" type="submit"
                class="bg-gradient-to-r hover:bg-gradient-to-l from-yellow-400 hover:from-yellow-500 to-yellow-400 hover:to-yellow-500 text-white w-[100%] p-2 rounded-[10px] mt-5 py-[12px] font-bold">
                Log In
            </button>
        </form>

        <p class="text-center text-sm text-gray-400 mt-5">Don't have an account yet?
            <a href="/register" class="text-yellow-500 hover:underline">Sign Up</a>
        </p>
        <p class="text-center text-sm text-gray-400 mt-2">
            <a href="{{ route('password.request') }}" class="text-yellow-500 hover:underline">Forgot Password?</a>
        </p>
    </div>
</body>

</html>