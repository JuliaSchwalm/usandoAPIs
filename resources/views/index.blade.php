<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Nome e Sobrenome</title>
</head>
<body>

    <div>
        <h2>Preencha seu Nome e Sobrenome</h2>
        
        <!-- Formulário Laravel -->
        <form action="{{ route('processar-formulario') }}" method="POST">
            @csrf <!-- Token CSRF do Laravel -->

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <br>

            <label for="sobrenome">Sobrenome:</label>
            <input type="text" id="sobrenome" name="sobrenome" required>

            <br>

            <button type="submit">Enviar</button>
        </form>
    </div>

</body>
</html>
