<html>
  <head>
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    
    </head>
  <body>
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
          <h1>Create Post</h1>
        <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Title')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="title" :value="old('email')" required autofocus />
            <!--x-input-error :messages="$errors->get('email')" class="mt-2" /-->
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Content')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="content"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
            
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
       
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" 
                </a>
         
            <x-primary-button class="ml-3">
                {{ __('Add Post') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layou>

          </div>
    </body>
  
  
  </html>