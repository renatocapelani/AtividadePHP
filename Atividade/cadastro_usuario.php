<?php
$titulo = "Página Inicial"; 
$migalhaPao = "Home > Usuario > Cadastro";
include "./cabecalho.php"; 

if(isset($_POST) && !empty($_POST))
{
    if( empty( $_POST["Nome"] ))
    {
        ?>
        <div class="alert alert-danger">
           Campo Nome não pode estar em branco
        </div>
    <?php
    }else if(empty($_POST["Email"])){
        ?>
            <div class="alert alert-danger">
            Campo Email não pode estar em branco
            </div>
        <?php
    }
    else
    {
    ?>
            <div class="alert alert-success">
                Cadastrado com sucesso
            </div>
            <table class="table table-borded">
                <tr>
                    <td><?php echo $_POST["Nome"]; ?></td>
                    <td><?php echo $_POST["Email"]; ?></td>
                    <td><?php echo $_POST["Login"]; ?></td>
                    <td><?php echo $_POST["Senha"]; ?></td>
                </tr>
            </table>
        <?php
    }
}else{

}

?>
<div class="row">
    <div class="offset-4 col-4">
        <h1>Formulário de cadastro</h1>
        <form action="./cadastro_usuario.php" method="post">

            <div class="mb-3">
                <label class="form-label">Email </label>
                <input type="email" class="form-control" name="Email">
            </div>
            <div class="mb-3">
                <label class="form-label">Login</label>
                <input type="text" class="form-control" name="Login" />
            </div>
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="Nome" />
            </div>
            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input type="password" class="form-control" name="Senha" />
            </div>
            <div class="mb-3">
               <button class="btn btn-success" type="submit">Enviar</button>
            </div>

        </form>
    </div>
</div>
<?php 

include "./rodape.php"; 

?>
