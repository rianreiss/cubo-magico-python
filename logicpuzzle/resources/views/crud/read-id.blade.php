@extends('crud-options')

@section ('content')

<style>
        #input-id{
            background-color: black;
        }
    </style>

    <form action="/read/1" method="get">
        <fieldset>
            <label for="id">Insira o ID para buscar:</label>
            <input type="text" id="input-id">
        </fieldset>

        <a href="1" id="input-id">aqui</a>

    </form>

    <br>

    <h1>Tal pessoa</h1>


@endsection