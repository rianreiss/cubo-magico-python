@extends('crud-options')

@section ('content')

<style>
        #input-id{
            background-color: black;
        }
        #id{
            background-color: black;
        }
    </style>

    <form action="" method="get">
        @csrf
        <fieldset>
            <label for="id">Insira o ID para buscar:</label>
            <input type="text" name="id" id="id">
        </fieldset>

        <input type="submit" name="submit" id="input-id" value="Procurar">

    </form>

    <br>

    <h1> {{ $pessoa->nome }} </h1>
    <h2> {{ $pessoa->sobrenome }} </h2>
    <br><br>
    <h2> {{ $pessoa->professor }} </h2>


@endsection