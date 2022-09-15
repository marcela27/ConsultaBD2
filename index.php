<!doctype html>
<html lang="en">

<head>
    <title>Sistema Web 2.0</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>



</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                        <img src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                        Sistema Web 2.0
</a>
</div>
</nav>
</div>
<div class="row">
    <div class="col">
    <nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Cadastro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="consulta.php">Consulta</a>
        </li>
        </ul>
</div>
</div>
</nav>
</div>
</div>
<div class="row">
    <div class="col">
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
  <nav class="navbar-brand">Cadastro de Usuários</span>
</div>
</nav>
</div>
</div>

<form class="row g-3" method="post" action="controller/ControllerCadastro.php?funcao=cadastro" id="form" name="form">
  <div class="col-md-6">
    <label for="lblEmail" class="form-label">Email</label>
    <input type="email" class="form-control" id="txtEmail" name="txtEmail">
  </div>
  <div class="col-md-6">
    <label for="lblSenha" class="form-label">Senha</label>
    <input type="password" class="form-control" id="txtSenha" name="txtSenha">
  </div>
  <div class="col-12">
    <label for="lblEndereco" class="form-label">Endereço</label>
    <input type="text" class="form-control" id="txtEndereco" name="txtEndereco">
  </div>
  <div class="col-md-6">
    <label for="lblBairro" class="form-label">Bairro</label>
    <input type="text" class="form-control" id="txtBairro" name="txtBairro">
  </div>
  <div class="col-md-6">
    <label for="lblCEP" class="form-label">CEP</label>
    <input type="text" class="form-control" id="txtCep" name="txtCep">
  </div>
  <div class="col-md-6">
    <label for="lblCidade" class="form-label">Cidade</label>
    <input type="text" class="form-control" id="txtCidade" name="txtCidade">
  </div>
  <div class="col-md-4">
    <label for="lblEstado" class="form-label">Estado</label>
    <select id="txtEstado" name="txtEstado"class="form-select">
      <option selected>Escolha...</option>
      <option>AC</option>
      <option>AL</option>
      <option>AP</option>
      <option>AM</option>
      <option>BA</option>
      <option>CE</option>
      <option>ES</option>
      <option>GO</option>
      <option>MA</option>
      <option>MT</option>
      <option>MS</option>
      <option>MS</option>
      <option>MG</option>
      <option>PA</option>
      <option>PB</option>
      <option>PR</option>
      <option>PE</option>
      <option>PI</option>
      <option>RJ</option>
      <option>RN</option>
      <option>RS</option>
      <option>RO</option>
      <option>RR</option>
      <option>SC</option>
      <option>SP</option>
      <option>SE</option>
      <option>TO</option>
      <option>DF</option>
    </select>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
         </div>
    </div>
</body>

</html>

