@extends ('.crud-options')

@section ('content')

    <style>
        #input-id{
            background-color: black;
        }
    </style>

    <form action="/read/1" method="get">
    @csrf
        <fieldset>
            <label for="id">Insira o ID para buscar:</label>
            <input type="text" id="input-id">
        </fieldset>

        <a href="read/1" id="input-id">aqui</a>

    </form>

@endsection