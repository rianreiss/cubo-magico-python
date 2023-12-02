@extends ('welcome')

@section ('content')

    <style>
        #readed{
            display: flex;
            flex-direction: column;
            justify-contente: center;
            align-items: center;
        }
        #p {
            background-color: white;
            color: black;
        }
    </style>

    <div id="readed">
        <div>
            <h1>Nome:</h1>
            <p id="p"> {{ $pessoa->nome }} </p>
        </div>
        <div>
            <h2>Sobrenome:</h2>
            <p id="p"> {{ $pessoa->sobrenome }} </p>
        </div>
        <div>
            <h2>Professor:</h2>
            <p id="p"> {{ $pessoa->professor }} </p>

        </div>
    </div>

@endsection