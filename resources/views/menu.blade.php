 
 
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

            <a href="/" class="my-2 shadow-sm sm:rounded-lg">
                <div class="home"></div> 
                <h4 >Home</h4>
            </a>

            <a href="/login" class="my-2 shadow-sm sm:rounded-lg">
                <div class="login"></div>
                <h4>Login</h4>
            </a>

            <a href="/vagas" class="my-2 shadow-sm sm:rounded-lg">
                <div class="vagas"></div>
                <h4>Todas as vagas</h4>
            </a>

            <a href="/candidato/register" class="my-2 shadow-sm sm:rounded-lg">
                <div class="candidato"></div>
                <h4>Candidato</h4>
            </a>

            <a href="/empresa/register" class="my-2 shadow-sm sm:rounded-lg">
                <div class="empresa"></div>
                <h4>Empresa</h4>
            </a>

         </section>


      </div>
    
 </body>
 </html>