 
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    
  <link rel="stylesheet" href="/css/maicons.css">

  <link rel="stylesheet" href="/css/bootstrap.css">


    <title>Document</title>
    
    @vite(['resources/css/app.css','resources/js/app.js'])
 </head>
 <body>

      <div class="app">
            
         <header class="menu-header">
            <p class="target">Menu</p>
         </header> 

         <section class="menu-section">

            <a href="/dashboard" class="my-2 shadow-sm sm:rounded-lg">
                <div class="home"></div> 
                <h4 >Home</h4>
            </a>

            <a href="/vagas" class="my-2 shadow-sm sm:rounded-lg">
                <div class="vagas"></div>
                <h4>Todas as vagas</h4>
            </a>

            <a href="/pendentes" class="my-2 shadow-sm sm:rounded-lg">
                <div class="pendentes"></div>
                <h4>Vagas Pendentes</h4>
            </a>

            <a href="/carta" class="my-2 shadow-sm sm:rounded-lg">
                <div class="empresa"></div>
                <h4>Carta de Apresentação</h4>
            </a>

            <a href="/empresa/register" class="my-2 shadow-sm sm:rounded-lg">
                <div class="notif"></div>
                <h4>Notificações</h4>
            </a>

            

            <x-responsive-nav-link :href="route('profile.edit')" class="perfil my-2 shadow-sm sm:rounded-lg">
                <div class="candidato"></div>
                <h4>Meu Perfil</h4>
            </x-responsive-nav-link>

           
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}" class="my-2 shadow-sm sm:rounded-lg ">
                @csrf
                <div class="sair"></div>
                <a style="border: none;" :href="route('logout')"
                        onclick="event.preventDefault();
                             this.closest('form').submit();">
                             <h4 style="margin-left: 8%;">Sair da Conta</h4>
            </a>
            </form>

         </section>


      </div>
    
 </body>
 </html>