<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de clientes</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/estilos/estilo.css">
</head>
<body>
    <main>
        <div id="container">
            <header class="card-header sticky-top">
                <nav class="navbar navbar-dark bg-light">
                    <h1>Clientes</h1>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="?pagina=home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?pagina=clientela">Clientela</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?pagina=novo">Novo</a>
                        </li>
                    </ul>
            </header>
            <main>
                <?php
                    $rota = new RouteController();
                    $pagina = "inicio";
                    if (isset($_GET["pagina"])) {
                        $pagina = $_GET["pagina"];
                    }
                    switch ($pagina) {
                    case "inicio":$rota->home();
                        break;
                    case "clientes":$rota->clientela();
                        break;
                    case "editar":$rota->edicao();
                        break;
                    case "novo":$rota->novo();
                        break;
                    }
                ?>
            </main>
            <footer class="card fixed-bottom">
              <div class="row">
                  <div class="col-md">Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/"                 title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"                 title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
           <div class="col-md">Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/"                 title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"                 title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
           <div class="col-md">Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/"                 title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"                 title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
              </div>
                &copy;Todos os Direitos Reservados
            </footer>
        </div>
    </main>
    <footer>
        &copy;Todos os Direitos Reservados
    </footer>
</body>
</html>