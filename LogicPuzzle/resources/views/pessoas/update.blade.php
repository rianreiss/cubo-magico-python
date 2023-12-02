<!-- resources/views/posts/create.blade.php -->

@extends('welcome') <!-- Se você estiver usando o layout padrão do Laravel -->

@section('content')
    <div class="container">

        <h1>Editar pessoa:</h1>

            <form action="/update/{{ $pessoa->id }}" method="post">
                @csrf
                @method('PUT')
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
            </form>
    </div>
@endsection
