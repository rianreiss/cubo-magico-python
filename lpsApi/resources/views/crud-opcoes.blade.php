@extends ('layouts.main')

@section('tittle', 'Opções CRUD')

@section('content')

<div id="body-div">

    <div id="container1">
        <h1>CRUD:</h1>

        <div>
            <ul>
                <li>
                    <a href="/pessoas/create">
                        <input type="submit" id="submit" value="Create (Criar)">
                    </a>
                </li>

                <li>
                    <a href="/pessoas/update">
                        <input type="submit" id="submit" value="Update (Editar)">
                    </a>
                </li>

                <li>
                    <a href="/pessoas/delete">
                        <input type="submit" id="submit" value="Delete (Deletar)">
                    </a>
                </li>

                <li>
                    <a href="/pessoas/read">
                        <input type="submit" id="submit" value="Read (Ler)">
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div id="container2">

    </div>
</div>

@endsection