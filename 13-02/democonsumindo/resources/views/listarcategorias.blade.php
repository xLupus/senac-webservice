<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorias</title>
</head>
<body>
    <p>Resultado do Processamento</p>
    <p><b>Codigo de retorno: {{ $categorias->status }}</b></p>
    <p><b>Mensagem: {{ $categorias->mensagem }}</b></p>
    <br>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
        </tr>
        @foreach ($categorias->categorias as $categoria)
        <tr>
            <td>{{ $categoria->id }}</td>
            <td>{{ $categoria->nome_da_categoria }}</td>
        </tr>    
        @endforeach
    </table>
</body>
</html>