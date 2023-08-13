<!DOCTYPE html>
<html>
<head>
    <title>Busca de usuário do GitHub</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Busca de usuário do GitHub</h1>
        <form id="form-busca" method="POST">
            <input type="text" name="usuario" placeholder="Digite o usuário do GitHub">
            <button type="button" id="botao-busca">Buscar</button>
        </form>
        <div id="dados-usuario">
            <table class="tabela-usuario">
            </table>
        </div>
    </div>

    <script src="{{ asset('js/github-user-search.js') }}"></script>
</body>
</html>