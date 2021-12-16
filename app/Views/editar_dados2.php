<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Editar Dados</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <?php $usuario_session = session();?>
        <div class="container">
          <a class="navbar-brand" href="#">Mind Consulting</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="\dashboard_admin">Admin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="\editar_dados2?id=<?php echo $usuario_session->get('ID') ?>">Editar dados</a>
              </li>
            </ul>
          </div>
          <div class="d-flex justify-content-end">
            <div>
                <a class="btn btn-danger" href="\sair">Sair</a>
            </div> 
          </div>
        </div>
      </nav>
    <div class="container">
        <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
            <div class="card w-50">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <h1>Editar dados</h1>
                        </div>
                        <form action="/atualizar" method="post">
                        <input type="hidden" name="id" id="id" value="<?php echo $usuario['ID'] ?>">
                            <div class="mb-3">
                                <label for="nome_completo" class="form-label">Nome Completo</label>
                                <input type="text" class="form-control" id="nome_completo" name="nome_completo" value="<?php echo $usuario['NomeCompleto'] ?>" >
                            </div>
                            <div class="mb-3">
                                <label for="cpf" class="form-label">CPF</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $usuario['CPF'] ?>">
                            </div>
                            <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?php echo $usuario['Email'] ?>">
                            </div>
                            <div class="mb-3">
                              <label for="senha" class="form-label">Senha</label>
                              <input type="password" class="form-control" id="senha" name="senha">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="999" name="tipoUsuario" id="Admin" <?php  if($usuario['TipoAcesso'] == '999') { echo 'checked';} ?>>
                                <label class="form-check-label" for="Admin">
                                    Admin
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="1" name="tipoUsuario" id="Comum" <?php  if($usuario['TipoAcesso'] == '1') {echo 'checked';} ?>>
                                <label class="form-check-label" for="Comum">
                                    Comum
                                </label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-danger">Atualizar</button>
                            </div>
                          </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</body>
</html>