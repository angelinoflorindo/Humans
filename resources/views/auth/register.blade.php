
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
     <header  >
         <div class="img-right">
            <a href="/menu" ><div class="icon"></div></a>
         </div>
         <div class="img-center-password"></div>
     </header>
     
 <form method="POST" action="{{ route('register') }}" class="login-form">
     @csrf

     <!-- Name -->
     <x-input-error :messages="$errors->get('name')" class="mt-2" />
     <div id="cover" class="mt-2"> 
         <x-text-input id="name" class="block w-full" type="text" 
         name="name" :value="old('name')"
         placeholder="Nome"
         required autofocus />
         
     </div>


     <!-- Password -->
     
     <x-input-error :messages="$errors->get('password')" class="mt-2" />
     <div class="mt-2" id="cover">  
         <x-text-input id="password" class="block  w-full"
                         type="password"
                         name="password"
                         placeholder="Senha"
                         required autocomplete="new-password" />
     </div>

      <!-- Confirm Password -->
      
      <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
      <div class="mt-2" id="cover">
        <x-text-input id="password_confirmation" class="block w-full"
                        type="password"
                        name="password_confirmation"
                        placeholder="Confirma a senha"
                        required />
    </div>

     <!-- Email Address -->
     
     <x-input-error :messages="$errors->get('email')" class="mt-2" />
     <div class="mt-2" id="cover"> 
         <x-text-input id="email" class="block w-full" type="email"
         placeholder="Email"
         name="email" :value="old('email')" required />
     </div>

    
     <div id="cover" class="mt-2">
         <button class="flex items-center justify-center btn-submit"  >
             Registrar
         </button>
     </div>
     </div>
 </form> 

   
  </div>
 
</body>
</html>
