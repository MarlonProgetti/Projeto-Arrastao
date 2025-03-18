<?php
$pag = 'usuarios';
?>

<a type="button" class="btn btn-primary"><span class="fa fa-plus"> Usuário</span></a>

<div class="bs-example widget-shadow" style="padding:15px">
  <table class="table table-stripet" id="tabela">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Thais</td>
        <td>Oto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Marlon</td>
        <td>Progetti</td>
        <td>@speed</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Irene</td>
        <td>Rufino</td>
        <td>@grand</td>
      </tr>
    </tbody>
  </table>
</div>

<script type="text/javascript">
$(document).ready(function() {
  $('#tabela').DataTable();
});
</script>