<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Dashboard Comum</title>
</head>
<body>
    <?php $usuario_session = session();?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#">Mind Consulting</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/dashboard_comum">Perfil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/editar_dados?id=<?php echo $usuario_session->get('ID') ?>">Editar dados</a>
              </li>
            </ul>
          </div>
          <div class="d-flex justify-content-end">
            <div>
                <a class="btn btn-danger" href="/sair">Sair</a>
            </div> 
          </div>
        </div>
    </nav>
    <div class="container">
        <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
            <div class="w-50">
                <div class="card mx-auto">
                    <div class="card-body text-center">
                        <h1>Bem Vindo, <?php echo $usuario_session->get('NomeCompleto') ?></h1>
                        <img src="./assets/images/pexels-pixabay-220453.jpg" alt="" class="rounded mx-auto d-block border border-dark" width="150px" height="150px">
                        <h2>Nome</h2>
                        <p><?php echo $usuario_session->get('NomeCompleto') ?></p>
                        <h2>CPF</h2>
                        <p><?php echo $usuario_session->get('CPF') ?></p>
                        <h2>Email</h2>
                        <p><?php echo $usuario_session->get('Email') ?></p>
                        <a href="/editar_dados?id=<?php echo $usuario_session->get('ID') ?>" class="btn btn-danger">Editar dados</a>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>