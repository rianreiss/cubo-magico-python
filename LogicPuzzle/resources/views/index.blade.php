@extends('layouts.layout')

<head>
    <link rel="stylesheet" href="/estilos/index.css">
</head>

@section('content')

<div id="div-body">
    <div id="game-selection">
        <div id="title">Escolha o seu Puzzle</div>

        <div id="jogos">
            <a href="jogos/forca/index.html">
                <div class="title-game-box">
                    <h1>
                        Jogo da Forca
                    </h1>
                </div>
                <div class="game-box">
                    <img src="imagens/forca.png">
                </div>
            </a>
            <a href="jogos/caca-palavra/index.html">
                <div class="title-game-box">
                    <h1>
                        Caça-Palavras
                    </h1>
                </div>
                <div class="game-box">
                    <img src="imagens/jogo2.png">
                </div>
            </a>
            <a href="jogos/forca/index.html">
                <div class="title-game-box">
                    <h1>
                        (Espaço p Jogo)
                    </h1>
                </div>
                <div class="game-box">
                    <img src="imagens/jogo3.png">
                </div>
            </a>
        </div>
    </div>

</div>

@endsection