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
    <nav class="navbar bg-light">
  <div class="container-fluid">
      Lista de Usuários
    </a>
  </div>
</nav>
</div>
</div>

<div class="row">
    <div class="col">&nbsp;</div>
</div>
<div class="row">
    <div class="col">
    <table class="table">
  <thead>
    <tr>
    <th scope="col">Email</th>
		<th scope="col">Endereco</th>
		<th scope="col">Senha</th>
		<th scope="col">Bairro</th>
		<th scope="col">CEP</th>
		<th scope="col">Cidade</th>
    <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td> 
      <button type="button" class="btn btn-dark">Editar</button>
      <button type="button" class="btn btn-dark">Excluir</button>
</td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td> 
      <button type="button" class="btn btn-dark">Editar</button>
      <button type="button" class="btn btn-dark">Excluir</button>
</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td> 
      <button type="button" class="btn btn-dark">Editar</button>
      <button type="button" class="btn btn-dark">Excluir</button>
</td>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>
</body>
</html>


