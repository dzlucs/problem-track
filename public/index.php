<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rastreador de Problemas</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="/assets/js/application.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/application.css">
</head>

<body>
    <nav class="navbar top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Problem Track</a>
        </div>
    </nav>

    <main class="container-fluid row">
        <aside class="col-3 sidebar">
            <nav>
                <ul class="nav flex-column mt-1">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Problemas</a>
                    </li>
                </ul>
            </nav>
        </aside>
        <section class="offset-3 col-9 px-4">
            <header class="mb-3">
                <h1>
                    Problemas registrados
                </h1>
            </header>

            <div class="row">
                <div class="col-8 mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Procurar problemas" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-primary" type="button">
                            Pesquisar...
                        </button>
                    </div>
                </div>
                <div class="col-4">
                    <a href="/pages/problems/new.php" class="btn btn-outline-primary">
                        <i class="fe fe-plus"></i>
                        Registrar Problema
                    </a>
                </div>
            </div>

            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                </thead>
                <tbody>
                   <tr>
                     <td>#1</td>
                     <td>Porta dos fundos bloco B não fecha</td>
                   </tr>  
                </tbody>
            </table>
        </section>
    </main>
</body>

</html>