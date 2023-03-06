<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

    <div class="app">

        <header>
            <div class="img-right">
                <a href="/dash-menu"><div class="icon"></div></a>
            </div>
            <div class="img-center"></div>
        </header>

        <h1 ><b>Humans</b></h1>
        <form action="/pesquisar" method="post" class="my-2">
           @csrf 
           <input type="text" name="pesquisa" class=" pesquisa"
              placeholder="Pesquisar vagas..."
           >
           <button type="submit" class="btn-enviar"></button>

        </form>



    </div>
    
</body>
</html>