<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | BitPack</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>


<div class="bg-white dark:bg-gray-900">
        <div class="flex justify-center h-screen">
            <div class="hidden bg-cover lg:block lg:w-3/3 slide" style="background-image: url(https://images.pexels.com/photos/2170387/pexels-photo-2170387.jpeg?cs=srgb&dl=pexels-bestbe-models-2170387.jpg&fm=jpg)">
                <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
                    <div>
                        <h2 class="text-4xl font-bold text-white"><span class="text-blue-700 "> BitPack </span> Bots</h2>
                        
                        <p class="max-w-xl mt-3 text-gray-300">We added a way to simplify your experience. With the BitPack bot, you can schedule when you want to buy or sell, easily get notified about any rate changes and more!</p>
                    </div>
                </div>
            </div>
            
            <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
                <div class="flex-1">
                    <div class="text-center">
                        <h2 class="text-4xl font-bold text-center text-blue-600 dark:text-white">BitPack</h2>
                        
                        <p class="mt-3 text-gray-500 dark:text-gray-300">Sign in to access your account</p>
                    </div>

                    <div class="mt-8">
                    <x-jet-validation-errors class="mb-4" />

@if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif

<div class="card-body">

@if (session('message'))
<div class="alert alert-danger">{{ session('message') }}</div>
@endif
</div>
                    <form method="POST" action="{{ route('login') }}">
            @csrf
                            <div>
                                <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email Address</label>
                                <input type="email" name="email" id="email" placeholder="example@example.com" :value="old('email')" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div class="mt-6">
                                <div class="flex justify-between mb-2">
                                    <label for="password" class="text-sm text-gray-600 dark:text-gray-200">Password</label>
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline"> {{ __('Forgot your password?') }}</a>
                                    @endif
                                </div>

                                <input type="password" name="password" id="password" placeholder="Your Password" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" autocomplete="current-password"/>
                            </div>
                            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
                            <div class="mt-6">
                                <button
                                    class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                    {{ __('Login') }}
                                </button>
                            </div>

                        </form>
                        @if (JoelButcher\Socialstream\Socialstream::show())
            <x-socialstream-providers />
        @endif
                        <p class="mt-6 text-sm text-center text-gray-400">Don&#x27;t have an account yet? <a href="{{ route('register') }}" class="text-blue-500 focus:outline-none focus:underline hover:underline">Sign up</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
</body>
</html>