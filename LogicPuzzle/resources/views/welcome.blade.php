<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opções CRUD</title>
    <link rel="stylesheet" href="/estilos/crud-options.css">
    <link rel="stylesheet" href="/estilos/create.css">
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


    <div id="body-div">

        <div id="container1">
            <h1>CRUD:</h1>

            <div>
                <ul>
                    <li>
                        <a href="/create">
                            <input type="submit" id="submit" value="Create (Criar)">
                        </a>
                    </li>

                    <li>
                        <a href="/update">
                            <input type="submit" id="submit" value="Update (Editar)">
                        </a>
                    </li>

                    <li>
                        <a href="/delete">
                            <input type="submit" id="submit" value="Delete (Deletar)">
                        </a>
                    </li>

                    <li>
                        <a href="/read">
                            <input type="submit" id="submit" value="Read (Ler)">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="container2">


            @yield('content')


        </div>
    </div>



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