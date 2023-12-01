<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoas</title>
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

    <!-- na viasualização das pessoas, colocar um botão "+" (incluir/cadastrar nova pessoa), e fazer com que esse botão redirecione a tela para o form, ou apareça o form-->

    <div id="body-div">


        <a href="#ver-pessoas">
            Ver Pessoas
        </a>

        <h1>Cadastrar pessoas:</h3>

            <form action="/create/pessoa" method="POST">
                @csrf
                <fieldset>
                    <div>
                        <label for="title">Nome:</label>
                        <input type="text" name="nome" id="nome" placeholder="Nome da pessoa">
                    </div>

                    <div>
                        <label for="title">Sobrenome:</label>
                        <input type="text" name="sobrenome" id="sobrenome" placeholder="Último sobrenome">
                    </div>
                </fieldset>
                
                <fieldset>
                    <div>
                        <label for="title">Professor(a):</label>
                        <select name="professor" id="professor">
                            <option value="cristiano">Cristiano S. Nunes</option>
                            <option value="giulliano">Giulliano P. Carnielli</option>
                            <option value="joao">João Cunha</option>
                            <option value="kesede">Kesede Julio</option>
                        </select>
                    </div>
                </fieldset>
                <input type="submit" value="Cadastrar">
                <a href="create/pessoa">teste</a>
            </form>

            <div id="ver-pessoas">
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