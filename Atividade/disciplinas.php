<?php
    include "./cabecalho.php";
?>

<div class="row">

<div class="col-12">
<div class="card">
<div class="card-header">
Lista de Disciplinas
<div class="button">
<a class="btn btn-success" href="#" role="button" aria-expanded="false">
NOVA DISCIPLINA
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
  <td>Administração Geral</td>
  <td></td>
  <td>ADM
  <a class="btn btn-warning">Editar</a>
  <a class="btn btn-danger">Excluir</a>
  </td>
</tr>
    
<tr>
  <th scope="row">2</th>
  <td>Gestão de Projetos de Sítio Internet II</td>
  <td></td>
  <td>GES
  <a class="btn btn-warning">Editar</a>
  <a class="btn btn-danger">Excluir</a>
  </td>
</tr>
<tr>
  <th scope="row">3</th>
  <td >Pesquisa Operacional</td>
  <td></td>
  <td>POP
  <a class="btn btn-warning">Editar</a>
  <a class="btn btn-danger">Excluir</a>
  </td>
</tr>
<tr>
  <th scope="row">4</th>
  <td >Planejamento Estratégico</td>
  <td></td>
  <td>PLA
  <a class="btn btn-warning">Editar</a>
  <a class="btn btn-danger">Excluir</a>
  </td>
</tr>
<tr>
  <th scope="row">5</th>
  <td >Português</td>
  <td></td>
  <td>POR
  <a class="btn btn-warning">Editar</a>
  <a class="btn btn-danger">Excluir</a>
  </td>
</tr>
<tr>
  <th scope="row">6</th>
  <td >Prática de Design</td>
  <td></td>
  <td>DES
  <a class="btn btn-warning">Editar</a>
  <a class="btn btn-danger">Excluir</a>
  </td>
</tr>
<tr>
  <th scope="row">7</th>
  <td >Prática Gestão Projetos</td>
  <td></td>
  <td>PRO
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