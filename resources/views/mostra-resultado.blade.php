<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: linear-gradient(to bottom right, #ffffff, #4169E1);
        }

        h1 {
            color: #4169E1; /* Cor do texto (branco) */
        }

        div {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            color: #000000; /* Cor do texto dentro do widget (preto) */
        }

        h3 {
            color: #4169E1; /* Cor do cabeçalho (azul royal) */
            margin-bottom: 15px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 8px;
        }
    </style>
</head>
<body>

    <div>
        <h1>Resultados</h1>

        <div>
            <h3>Idade:</h3>
            <p>O nome {{ $dadosIdade['name'] }} tem uma idade estimada de {{ $dadosIdade['age'] }} anos.</p>
        </div>

        <div>
            <h3>Nacionalidade:</h3>
            @if(count($dadosNacionalidade['country']) > 0)
                <p>O sobrenome {{ $dadosNacionalidade['name'] }} tem uma probabilidade mais alta de pertencer à seguinte nacionalidade:</p>
                <ul>
                    @foreach($dadosNacionalidade['country'] as $country)
                        <li>{{ $country['country_id'] }} (Probabilidade: {{ $country['probability'] * 100 }}%)</li>
                    @endforeach
                </ul>
            @else
                <p>Não foi possível determinar a nacionalidade do sobrenome.</p>
            @endif
        </div>
    </div>

</body>
</html>
