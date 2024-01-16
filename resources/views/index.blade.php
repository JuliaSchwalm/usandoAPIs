<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Nome e Sobrenome</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: linear-gradient(to bottom right, #ffffff, #4169E1); /* Gradiente de branco a azul royal */
        }

        div {
            background: #ffffff; /* Cor de fundo do widget branco */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-bottom: 5px;
        }

        input {
            margin-bottom: 15px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            background-color: #4169E1; /* Cor do botão (azul royal) */
            color: #ffffff; /* Cor do texto no botão */
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #001F3F; /* Cor do botão ao passar o mouse (tom mais escuro de azul royal) */
        }
    </style>
</head>
<body>

    <div>
        <h2>Preencha seu Nome e Sobrenome</h2>
        
        <!-- Formulário Laravel -->
        <form action="{{ route('processar-formulario') }}" method="POST">
            @csrf <!-- Token CSRF do Laravel -->

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required pattern="[a-zA-Z]+">

            <label for="sobrenome">Sobrenome:</label>
            <input type="text" id="sobrenome" name="sobrenome" required pattern="[a-zA-Z]+">

            <button type="submit">Enviar</button>
        </form>
    </div>

</body>
</html>
