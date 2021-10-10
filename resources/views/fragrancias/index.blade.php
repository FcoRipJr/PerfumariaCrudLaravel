<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfumaria </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans">
    <link href="http://fonts.cdnfonts.com/css/classic-blody-line" rel="stylesheet">            
    <link rel="stylesheet" href="/style.css">

</head>

<body>

<header>
        <nav class="navbar navbar-expand-md navbar-light navbar-color py-2 px-2">
            <a class="navbar-brand" href="/"><img class="logo" src="/Logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container">
                <div class="collapse navbar-collapse text-blue" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <a class="nav-link text-blue" href="{{route('listar_perfume')}}">PERFUMES </a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link text-blue" href="{{route('listar_fragrancia')}}">FRAGRANCIAS </a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link text-blue" href="{{route('novo_perfume')}}">NOVO PERFUME </a>
                    </li> 
                    <li class="nav-item active">
                    <a class="nav-link text-blue" href="{{route('nova_fragrancia')}}">NOVA FRAGRANCIA </a>
                    </li>  
                </ul>
                </div>
            </div>
        </nav>
    </header>

    <div id="principal">   
        <div class="container text-blue">
            </br>
            <table class="col-12">
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Estoque</th>
                    <th>Total Utilizado</th>
                    <th></th><th></th>
                </tr>
                @foreach($fragrancias as $fragrancia)
                    <tr>
                        <td>{{$fragrancia->id}}</td>
                        <td>{{$fragrancia->nome}}</td>
                        <td>{{$fragrancia->estoque}}</td>
                        <td>{{$fragrancia->total_utilizado}}</td>
                        <td><a type="submit" href="{{route('editar_fragrancia',['id'=>$fragrancia->id])}}" class="btn btn-warning" 
                            title="Editar fragrancia {{$fragrancia->nome}}">Editar</a></td>
                        <td><a type="submit" href="{{route('excluir_fragrancia',['id'=>$fragrancia->id])}}" class="btn btn-danger" 
                            title="Excluir fragrancia {{$fragrancia->nome}}">Excluir</a></td>
                    </tr>

                @endforeach
            </table>
            <a tupe="submit" href="{{route('nova_fragrancia')}}" class="btn btn-success mb-5" 
                            title="Nova fragrancia ">Novo</a>
            </br>
        </div>
    </div> 

    <footer id="footer">
        <h4 >Perfumaria</h4>
        <h3 class="text-blue ">SINTA A FRAGRANCIA</h1>
        <nav class="navbar navbar-expand-md navbar-light py-2 px-2">
        <a class="navbar-brand" href="#"></a>
        <div class="container  ">
            <div class=" navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item active">
                        <a class="nav-link text-blue"  href="{{route('listar_perfume')}}">PERFUMES </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-blue" href="{{route('listar_fragrancia')}}">FRAGRANCIAS </a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link text-blue" href="{{route('novo_perfume')}}">NOVO PERFUME </a>
                    </li> 
                                        
                </ul>
            </div>
            

        </div>
        
        </nav>

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
        </svg>

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
        </svg>

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe2" viewBox="0 0 16 16">
            <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
        </svg>


        <p><a class="navbar-brand" href="/"><img class="logo" src="/Logo.png" alt=""></a>2021 - Perfumaria</p>
    </footer>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>    