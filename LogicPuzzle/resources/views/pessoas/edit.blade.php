@extends ('welcome')

@section ('content')

    <style>
        #input-id{
            background-color: black;
        }
        #id{
            background-color: black;
        }
    </style>

    <form action="/update" method="post">
        @csrf
        <fieldset>
            <label for="id">Insira o ID para editar:</label>
            <input type="text" name="id" id="id">
        </fieldset>

        <input type="submit" name="submit" id="input-id" value="Procurar">

    </form>

@endsection