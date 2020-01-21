<?php
if (isset($_GET["pagina"])) {
	$nome = "";
	$log = "";
	$senha = "";
	$textoBotao = "Salvar";
	$action = "controllers/alunoInserirController.php";
	if (isset($_GET["codigo"])) {

		if ($_GET["pagina"] == "editar") {
			$dao = new DAO();
			$cadastro = $dao->buscarCodigo("cadastro", $_GET["codigo"]);
			$nome = $cadastro["nome"];
			$tel = $cadastro["telefone"];
			$email = $cadastro["email"];
			$foto = $cadastro["foto"];
			$textoBotao = "editar";
			$action = "controller/alterarCodigoController.php";
		}
	}
	?>
 <section class="container">
    <form action="<?=$action?>" method="post">
        <div class="form-group">
                <label for="nome">Nome</label>
                <input class="form-control" id="nome" name="nome" type="text" value="<?=$nome?>">
</div>
 <?php
if ($_GET["pagina"] == "novo") {
		?>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input class="form-control" id="nome" name="nome" type="text">
            </div>
                  <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" id="email" type="email" name="email" placeholder="usuario@correio.com">
            </div>
            <div class="form-group">
                <label for="nome">Telefone</label>
                <input class="form-control" id="telefone" name="telefone" type="number" placeholder="(00)99999-9999">
            </div>
                  <div class="form-group">
                <label for="foto">Email</label>
                <input class="form-control" id="foto" type="image" name="foto" placeholder="Insira sua foto em arquivo .jpeg (máx. 4MB)">
            </div>

<?php
}
	?>

                <input type="hidden" value="<?=$id?>" name="id">



        <button type="submit" class="btn btn-primary"><?=$textoBotao?></button>

    </form>
</section>
<?php
}
?>