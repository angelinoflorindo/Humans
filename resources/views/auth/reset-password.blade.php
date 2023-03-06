
 
 
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
            <div class="img-right"></div>
            <div class="img-center-password"></div>
        </header>

     
    <form method="POST" action="{{ route('password.store') }}" class="login-form">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Password -->
        <div class="mt-2" id="cover"> 
            <x-text-input id="password" class="block w-full" type="password" 
            name="password"
            placeholder="Nova palavra passe"
            required />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-2" id="cover">  

            <x-text-input id="password_confirmation" class="block w-full"
                                type="password"
                                name="password_confirmation"
                                placeholder="Confirma palavra passe"
                                required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-center mt-2" id="cover">
            <button class="btn-submit">
                Concluir
            </button>
        </div>
    </form> 
     </div>
    
   </body>
   </html>














 

 