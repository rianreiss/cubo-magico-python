<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('tittle')</title>
    <link rel="stylesheet" href="/estilos/pessoas/crud-opcoes.css">
</head>

<body>
    <header>
        <p>
            Logic Puzzle Solver
        </p>
        <nav>
            <button>
                <img src="images/icons8-cardápio.svg">
            </button>
            <div>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="pessoas.html">Pessoas</a></li>
                    <li><a href="jogos.html">Jogos</a></li>
                    <li><a href="sobre-nos.html">Sobre nós</a></li>
                </ul>
            </div>
        </nav>
    </header>


    @yield('content')



    <footer>
        <div>
            <div>
                Acompanhe nosso programa no <a href="https://www.instagram.com/pythonpuzzelsolver/">instagram</a>
            </div>
            <div id="direitos">
                Todos os direitos reservados aos alunos da UniMetrocamp
            </div>
        </div>
    </footer>

</body>

</html>