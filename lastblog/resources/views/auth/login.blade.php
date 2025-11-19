<x-layout>
<body class="bg-gray-50 min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full space-y-8 p-8">
        <div class="text-center">
            <h2 class="mt-6 text-3xl font-bold text-gray-900">Welcome back</h2>
            <p class="mt-2 text-sm text-gray-600">Sign in to your account</p>
        </div>
        <form class="mt-8 space-y-6" action="#" method="POST">
            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="email" class="sr-only">Email address</label>
                    <input id="email" name="email" type="email" autocomplete="email" required 
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-red-500 focus:border-red-500 focus:z-10 sm:text-sm" 
                        placeholder="Email address">
                </div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required 
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-red-500 focus:border-red-500 focus:z-10 sm:text-sm" 
                        placeholder="Password">
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember-me" name="remember-me" type="checkbox" 
                        class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded">
                    <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                </div>

                <div class="text-sm">
                    <a href="#" class="font-medium text-red-600 hover:text-red-500">Forgot password?</a>
                </div>
            </div>

            <div>
                <button type="submit" 
                    class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                    Sign in
                </button>
            </div>
            
            <div class="text-center">
                <p class="text-sm text-gray-600">
                    Don't have an account? 
                    <a href="register.html" class="font-medium text-red-600 hover:text-red-500">Sign up</a>
                </p>
            </div>
        </form>
    </div>
</body>
</x-layout>