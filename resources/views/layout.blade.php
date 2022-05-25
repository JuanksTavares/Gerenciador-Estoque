<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Produtos</title>
    <link rel="stylesheet" href="/resources/css/layout.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header>
            <nav>
                <ul class='nav-list'>
                    <li><a href="/buscar">Buscar</a></li>
                    <li><a href="/">Caixa</a></li>
                    <li><a href="/">Estoque</a></li>
                    <li><a href="/buscar/adicionar">Cadastro</a></li>
                    <li><a href="/">Vendas</a></li>
                </ul>
            </nav>
        </header>
        <div class="jumbotron">
            <h1>@yield('cabecalho')</h1>
        </div>
        @yield('conteudo')
     </div>
</body>
</html>