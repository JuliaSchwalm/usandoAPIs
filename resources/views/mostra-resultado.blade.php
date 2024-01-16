<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>

    <h2>Resultados</h2>

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

</body>
</html>
