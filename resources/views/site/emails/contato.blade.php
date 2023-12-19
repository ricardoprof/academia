<!DOCTYPE html>
<html>
<head>
    <title>Nova mensagem de Contato via Site</title>
</head>
<body>
    <p><strong>Nome:</strong> {{ $dados['name'] }}</p>
    <p><strong>E-mail:</strong> {{ $dados['email'] }}</p>
    <p><strong>Telefone:</strong> {{ $dados['tel'] }}</p>
    <p><strong>Assunto:</strong> {{ $dados['subject'] }}</p>
    <p><strong>Mensagem:</strong> {{ $dados['mensagem'] }}</p>
</body>
</html>

