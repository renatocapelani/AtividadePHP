<?php
    include "./cabecalho.php";
?>

<div class="row">

<div class="col-12">
<div class="card">
<div class="card-header">
Lista de Salas
<div class="button">
<a class="btn btn-success" href="#" role="button" aria-expanded="false">
NOVA SALA
</a>
<form class="d-flex" role="search">
    <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">PESQUISAR</button>
  </form>
</div>
<table class="table">
<thead>
<tr>
  <th scope="col">ID</th>
  <th scope="col">Nome</th>
  <th scope="col">Sigla</th>
  <th scope="col">Apelido</th>
</tr>
</thead>
<tbody>
<table class="table table-striped">
<tr>
  <th scope="row">1</th>
  <td>Sala 01</td>
  <td></td>
  <td>01
  <a class="btn btn-warning">Editar</a>
  <a class="btn btn-danger">Excluir</a>
  </td>
</tr>
    
<tr>
  <th scope="row">2</th>
  <td>Sala 02</td>
  <td></td>
  <td>02
  <a class="btn btn-warning">Editar</a>
  <a class="btn btn-danger">Excluir</a>
  </td>
</tr>
<tr>
  <th scope="row">3</th>
  <td >Sala 03</td>
  <td></td>
  <td>03
  <a class="btn btn-warning">Editar</a>
  <a class="btn btn-danger">Excluir</a>
  </td>
</tr>
<tr>
  <th scope="row">4</th>
  <td >Sala 04</td>
  <td></td>
  <td>04
  <a class="btn btn-warning">Editar</a>
  <a class="btn btn-danger">Excluir</a>
  </td>
</tr>
<tr>
  <th scope="row">5</th>
  <td >Sala 05</td>
  <td></td>
  <td>05
  <a class="btn btn-warning">Editar</a>
  <a class="btn btn-danger">Excluir</a>
  </td>
</tr>
<tr>
  <th scope="row">6</th>
  <td >Sala 06</td>
  <td></td>
  <td>06
  <a class="btn btn-warning">Editar</a>
  <a class="btn btn-danger">Excluir</a>
  </td>
</tr>
<tr>
  <th scope="row">7</th>
  <td >Sala 07</td>
  <td></td>
  <td>07
  <a class="btn btn-warning">Editar</a>
  <a class="btn btn-danger">Excluir</a>
  </td>
</tr>
</tbody>
</table>

</div>
</div>

</div>

<?php

    include "./rodape.php";
?>