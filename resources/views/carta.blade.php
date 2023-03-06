
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
            <a href="/dash-menu" ><div class="icon"></div></a>
         </div>
         <div class="img-center-carta"></div>
     </header>
     
 <form method="POST" action="{{ route('carta') }}" class="login-form">
     @csrf

    <div class="first-report" id="report1">
        
            <!-- Name --> 
            <div id="cover" class="mt-2"> 
                <x-text-input id="name" class="block w-full" type="text" 
                name="name" :value="old('name')"
                placeholder="Nome da Institução"
                required autofocus />
                
            </div>


            <!-- Grau Acadêmico -->
            
            <div class="mt-2" id="cover">  
                <x-text-input id="grau" class="block  w-full"
                                type="text"
                                name="grau"
                                placeholder="Grau Acadêmico"
                                required  />
            </div>

            <!-- Experiência -->
            
            <div class="mt-2" id="cover">
            <x-text-input id="experiencia" class="block w-full"
                            type="number"
                            name="experiencia"
                            placeholder="Anos de Experiência"
                            required />
        </div>

            <!-- Email Address -->
            
            <div class="mt-2" id="cover"> 
                <x-text-input id="linguas" class="block w-full" type="text"
                placeholder="Línguas Faladas"
                name="linguas" :value="old('linguas')" required />
            </div>

        
            <div id="cover" class="mt-2">
                <button class="flex items-center justify-center btn-submit" type="button"   id="carta-seguinte">
                    seguinte
                </button>
            </div> 

    </div>

    <div class="second-report my-2"  id="report2">
        
        <!-- mais sobre --> 
        <div id="cover" class="mt-2"> 
            <textarea name="sobre"  cols="30" rows="10" class="form-control" id="sobre"
            placeholder="Descreva mais sobre ti....." ></textarea>
        </div>


        <!-- Data de Nascimento  -->
        <p id="alert_carta" class="text-success ">Data de Nascimento</p>
        <div class="mt-2" id="cover">  
            <x-text-input id="birthday" class="block  w-full"
                            type="date"
                            name="birthday"
                            placeholder="Data de Nascimento "
                            required  />
        </div>

        <!-- anexo -->
        
        <div class="mt-2" id="cover">
        <x-text-input id="anexo" class="block w-full"
                        type="file" 
                        name="anexo"
                        placeholder="Carregar currículo"
                        required />
        </div>

    
        <div id="cover" class="mt-2">
            <button class="flex items-center justify-center btn-submit" type="submit"  >
                Concluir
            </button>
        </div> 

        <!-- voltar -->
        <div class="mt-2" id="cover">
            <button class="flex items-center justify-center btn" type="button" id="carta-voltar"  >
                voltar
            </button>
            
    </div>
 </form> 

   
  </div>
 
</body>
</html>
