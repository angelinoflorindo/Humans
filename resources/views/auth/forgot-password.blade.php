 
 
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

        <form method="POST" action="{{ route('password.email') }}" class="login-form" style="height: 20%;">
            @csrf
    
            <!-- Email Address -->
            <div id="cover"> 
                <x-text-input id="email" class="block  w-full" type="email" 
                name="email" :value="old('email')" placeholder="Email" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
    
            <div class="flex items-center justify-center mt-2" id="cover">
                <button class="btn-submit">
                     Seguinte 
                </button>
            </div>
        </form> 


     </div>
    
   </body>
   </html>
