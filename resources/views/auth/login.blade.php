



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
  <link rel="stylesheet" href="/css/bootstrap.min.css">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

<div class="app">
    

    <header>
        <div class="img-right" id="img-right">
            <a href="/menu" ><div class="icon"></div></a>
        </div>
    
        <div class="img-center-login"></div>

        
     </header>   
    <form method="POST" action="{{ route('login') }}" class="login-form ">
        @csrf

        <!-- User Email -->
        
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
        <div class="mt-2" > 
            <x-text-input id="nome" class="block w-full form-control" type="email" name="email"
               required autofocus  placeholder="Nome"/>
        </div>

        <!-- Password -->
        
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
        <div class="mt-2"> 
            <x-text-input id="password" class="block w-full" 
                            type="password"
                            name="password"
                            required autocomplete="current-password" placeholder="Senha" />

        </div> 

        <!-- Remember Me -->
        <div class="remember mt-2">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Lembra - me') }}</span>
            </label>
        </div>

         <!-- Button submit -->
         <div class="mt-2">
            <button class="btn-submit"  >
                Entrar
         </button> 
         </div>
         <!-- Foget password -->

         <div class="mt-2">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Esqueceu sua senha?') }}
                </a>
            @endif
         </div>

    </form> 

</div>
    
</body>
</html>